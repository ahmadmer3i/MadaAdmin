<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $userIp = $request->ip();
        $locationData = Location::get('149.200.255.243');
        dd($locationData);
    }
}
