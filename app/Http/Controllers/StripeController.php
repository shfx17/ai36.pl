<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\EbookSetting;
use App\Models\Order;
use App\Services\EmailService;
use App\Services\LocationService;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;
use Stripe\Stripe;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class StripeController extends Controller
{
    /**
     * @throws ApiErrorException
     */
    public function checkout(): RedirectResponse
    {
        $location = (new LocationService())->getLocation(request()->ip());
        $countryCode = $location ? $location->countryCode : 'PL';

        $ebookSetting = EbookSetting::whereIn('country', [$countryCode, 'PL'])
            ->orderByRaw("FIELD(country, '$countryCode', 'PL')")
            ->first();

        $price = $ebookSetting ? str_replace('.', '', $ebookSetting->price) : null;

        Stripe::setApiKey(config('stripe.sk'));

        $session = Session::create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'pln',
                        'product_data' => [
                            'name' => "Opłać e-book'a"
                        ],
                        'unit_amount' => $price
                    ],
                    'quantity' => 1
                ]
            ],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => request()->getSchemeAndHttpHost()
        ]);

        return redirect()->away($session->url);
    }

    /**
     * @throws ApiErrorException
     * @throws Exception
     */
    public function success(Request $request): \Illuminate\Contracts\Foundation\Application|Factory|View|Application
    {
        Stripe::setApiKey(config('stripe.sk'));

        $sessionId = $request->query('session_id');
        $session = Session::retrieve($sessionId);
        $email = $session->customer_details->email;

        // SEND EMAIL WITH FILE
        // App::make(EmailService::class)->sendEbook($email);

        $link = 'http://localhost:8000/success?session_id=' . $sessionId;

        /** @var Order $order */
        $order = Order::where('link', $link)->first();

        if (!$order) {
            $location = (new LocationService())->getLocation($request->ip());

            $order = new Order();
            $order->link = $link;
            $order->email = $email;
            $order->country = $location ? $location->countryCode : 'PL';
        }

        if ($order->status === Order::STATUS_UNACTIVE) {
            abort(403, 'Nieautoryzowany dostęp.');
        }

        $order->status = Order::STATUS_ACTIVE;

        if (!$order->save()) {
            throw new Exception('Problem z połączeniem z bazą danych. Skontaktuj się z administratorem.');
        }

        session(['orderLink' => $order->link]);

        return view('download');
    }

    /**
     * @throws Exception
     */
    public function download(): BinaryFileResponse
    {
        if (!$orderLink = session('orderLink')) {
            abort(403, 'Nieautoryzowany dostęp.');
        }

        /** @var Order $order */
        $order = Order::where('link', $orderLink)->first();

        if (!$order) {
            abort(403, 'Nieautoryzowany dostęp.');
        }

        $order->status = Order::STATUS_UNACTIVE;

        if (!$order->save()) {
            throw new Exception('Problem z połączeniem z bazą danych. Skontaktuj się z administratorem.');
        }

        $ebookPath = storage_path('app/public/Kompedium wiedzy - Narzędzia AI.pdf');

        return response()->download($ebookPath);
    }

    public function confirm(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('confirm');
    }
}
