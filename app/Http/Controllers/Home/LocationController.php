<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\VisitorInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $userIp = $request->ip();
        $locationData = Location::get($userIp);
        VisitorInfo::insert([
            'ip' => $locationData->ip,
            'countryName' => $locationData->countryName,
            'countryCode' => $locationData->countryCode,
            'regionCode' => $locationData->regionCode,
            'regionName' => $locationData->regionName,
            'cityName' => $locationData->cityName,
            'zipCode' => $locationData->zipCode,
            'isoCode' => $locationData->isoCode,
            'postalCode' => $locationData->postalCode,
            'latitude' => $locationData->latitude,
            'longitude' => $locationData->longitude,
            'metroCode' => $locationData->metroCode,
            'areaCode' => $locationData->areaCode,
            'timezone' => $locationData->timezone,
            'created_at' => Carbon::now(),
        ]);
    }
}
