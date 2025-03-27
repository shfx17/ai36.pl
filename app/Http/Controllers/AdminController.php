<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAdminPasswordRequest;
use App\Http\Requests\UpdateEbookPriceRequest;
use App\Models\EbookSetting;
use App\Models\Order;
use App\Services\ExportService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class AdminController extends Controller
{
    public function showLogin(): \Illuminate\Contracts\Foundation\Application|Factory|View|Application|Redirect|RedirectResponse
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->only('login', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login' => 'Dane są niepoprawne']);
    }

    public function showDashboard(Request $request): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $country = $request->query('country', 'PL');

        $count = Order::where('country', $country)->count();
        $ebookSetting = EbookSetting::where('country', $country)->first();
        $profit = $ebookSetting ? Order::where('country', $country)->count() * $ebookSetting->price : 0;
        $currency = $ebookSetting->currency;

        return view('admin.dashboard', compact(
            'count',
            'profit',
            'country',
            'currency'
        ));
    }

    public function showClient(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $orders = Order::paginate(25);
        return view('admin.client', compact('orders'));
    }

    public function export(): BinaryFileResponse
    {
        $filePath = (new ExportService())->export(Order::class);
        return response()->download($filePath)->deleteFileAfterSend();
    }

    public function showEbook(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $ebookSettings = EbookSetting::all();
        return view('admin.ebook', compact('ebookSettings'));
    }

    public function updateEbook(UpdateEbookPriceRequest $request): RedirectResponse
    {
        foreach ($request->prices as $country => $price) {
            EbookSetting::updateOrCreate(
                ['country' => $country],
                ['price' => $price]
            );
        }

        return redirect()->back()->with('success', 'Ceny zostały zaktualizowane.');
    }

    public function showSetting(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.setting');
    }

    public function updatePassword(UpdateAdminPasswordRequest $request): RedirectResponse
    {
        $admin = Auth::guard('admin')->user();

        if (!Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors(['current_password' => 'Podane obecne hasło jest nieprawidłowe.']);
        }

        $admin->password = Hash::make($request->new_password);

        if (!$admin->save()) {
            return back()->withErrors(['password' => 'Hasło nie zostało zmienione.']);
        }

        return back()->with('success', 'Hasło zostało pomyślnie zmienione!');
    }

    public function logout(): RedirectResponse
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
