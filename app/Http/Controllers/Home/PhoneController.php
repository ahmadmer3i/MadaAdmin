<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }

    public function phone_section()
    {
        $phone = Phone::findOrFail(1);
        return view('admin.phone_section.phone_section', compact('phone'));
    }

    public function phone_section_update(Request $request)
    {
        Phone::findOrFail(1)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);
        $notification = array( 'message' => 'Phone Section Updated Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }
}
