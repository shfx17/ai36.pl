<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;
use Stevebauman\Location\Position;

class LocationService
{
    public function getLocation(string $ip): Position|bool
    {
//        test other IPs, local US IP
//        $ip = '8.8.8.8';
        return Location::get($ip);
    }

    public function setLanguage(string $countryCode): string|null
    {
        if (!Session::get('status')) {
            $lang = ($countryCode === 'PL') ? 'pl' : 'en';
            App::setLocale($lang);
        }

        return Session::get('locale');
    }
}
