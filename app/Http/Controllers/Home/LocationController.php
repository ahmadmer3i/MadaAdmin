<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\VisitorInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Stevebauman\Location\Facades\Location;

class LocationController extends Controller
{
    /* function getVisitorData(Request $request)
     {
         $ip = $request->ip();
         $data = Location::get('79.173.253.83');
         dd($data);
     }*/
}
