<?php
namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch($lang): RedirectResponse
    {
        if (!in_array($lang, ['en', 'pl'])) {
            abort(400);
        }

        Session::put('status', 1);
        Session::put('locale', $lang);
        Session::save();

        return redirect()->back();
    }
}
