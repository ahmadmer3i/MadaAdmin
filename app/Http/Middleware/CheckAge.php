<?php

namespace App\Http\Middleware;

use App\Models\VisitorInfo;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Stevebauman\Location\Facades\Location;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse) $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */


    public function handle(Request $request, Closure $next)
    {


        return $next($request);
    }

    public function terminate(Request $request, Response $response)
    {

        $userIp = $request->ip();
        $locationData = Location::get('167.172.174.25');
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
