<?php

namespace App\Http\Controllers;

use App\Models\EbookSetting;
use App\Services\LocationService;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function showHome(Request $request): Factory|Application|View|\Illuminate\Contracts\Foundation\Application
    {
        $location = (new LocationService())->getLocation($request->ip());

        $countryCode = $location ? $location->countryCode : 'PL';

        $ebookSetting = EbookSetting::whereIn('country', [$countryCode, 'PL'])
            ->orderByRaw("FIELD(country, '$countryCode', 'PL')")
            ->first();

        $price = $ebookSetting ? $ebookSetting->price : null;
        $currency = $this->getCurrency($ebookSetting);

        (new LocationService())->setLanguage($countryCode);

        return view('home', compact('price', 'currency'));
    }

    private function getCurrency($ebookSetting)
    {
        if (!$ebookSetting) {
            return 'zł';
        }

        return $ebookSetting->currency === 'PLN' ? 'zł' : $ebookSetting->currency;
    }
}
