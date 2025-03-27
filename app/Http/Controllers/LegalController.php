<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;

class LegalController extends Controller
{
    public function showTerms(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('legal.terms');
    }

    public function showPrivacy(): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        return view('legal.privacy-policy');
    }
}
