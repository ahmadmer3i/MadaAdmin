<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeCounter;
use App\Models\HomeHero;
use App\Models\HomeOverview;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeHeroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }

    public function home_hero()
    {
        $home_hero = HomeHero::find(1);
        return view('admin.home_hero.home_hero_all', compact('home_hero'));
    }

    public function hero_update(Request $request)
    {
        $hero_id = $request->id;

        if ($request->file('hero_image')) {
            $image = $request->file('hero_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(810, 766)->save('upload/home_hero/' . $name_gen);
            $save_url = 'upload/home_hero/' . $name_gen;
            HomeHero::findOrFail($hero_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'contact_text' => $request->contact_text,
                'contact_phone' => $request->contact_phone,
                'hero_image' => $save_url,
                'form_button_title' => $request->form_button_title,
            ]);
            $notification = array(
                'message' => 'Home Hero Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        } else {
            HomeHero::findOrFail($hero_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'contact_text' => $request->contact_text,
                'contact_phone' => $request->contact_phone,
                'form_button_title' => $request->form_button_title,
            ]);
            $notification = array(
                'message' => 'Home Hero Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function home_counter()
    {
        $home_counter = HomeCounter::find(1);
        return view('admin.home.home_counter', compact('home_counter'));
    }

    public function home_counter_update(Request $request)
    {
        $counter_id = $request->id;
        HomeCounter::findOrFail($counter_id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'counter' => $request->counter
        ]);
        $notification = array(
            'message' => 'Home Counter Data Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function home_overview()
    {
        $home_overview = HomeOverview::find(1);
        return view('admin.home.home_overview', compact('home_overview'));
    }

    public function home_overview_update(Request $request)
    {
        $id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(780, 1041)->save('upload/home_overview/' . $name_gen);
            $save_url = 'upload/home_overview/' . $name_gen;
            HomeOverview::findOrFail($id)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Home Overview Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        } else {
            HomeOverview::findOrFail($id)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
            ]);
            $notification = array(
                'message' => 'Home Overview Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }
}
