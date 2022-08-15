<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\AboutCoreValue;
use App\Models\AboutMission;
use App\Models\AboutVision;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    /* public function __construct()
     {
         $this->middleware('auth')->except([ 'index', 'show' ]);
     }*/


    public function about_title()
    {
        $about_title = About::find(1);
        return view('admin.about_page.about_title', compact('about_title'));
    }

    public function about_title_update(Request $request)
    {
        $about_title = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(960, 854)->save('upload/about_header_image/' . $name_gen);
            $save_url = 'upload/about_header_image/' . $name_gen;
            About::findOrFail($about_title)->update([
                'title' => $request->title,
                'about_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'About Title Page & Image Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);

        } else {
            About::findOrFail($about_title)->update([
                'title' => $request->title,
            ]);
            $notification = array(
                'message' => 'About Title Page Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
    }


    public function about_core_value()
    {
        $values = AboutCoreValue::all();
        return view('admin.about_page.core_values', compact('values'));
    }

    public function add_about_core_value()
    {
        return view('admin.about_page.add_core_values');
    }

    public function add_about_core_value_store(Request $request)
    {
        if ($request->file('value_image')) {
            $value_image = $request->file('value_image');
            $image_name = hexdec(uniqid()) . '.' . $value_image->getClientOriginalExtension();
            Image::make($value_image)->resize(780, 780)->save('upload/core_value_images/' . $image_name);
            $value_image_url = 'upload/core_value_images/' . $image_name;
            AboutCoreValue::insert([
                'image' => $value_image_url,
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
            $notification = array( 'message' => 'Value Added Successfully', 'alert-type' => 'success' );
            return redirect()->route('about.core-values')->with($notification);
        } else {
            AboutCoreValue::insert([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
            $notification = array( 'message' => 'Value Added Successfully', 'alert-type' => 'success' );
            return redirect()->route('about.core-values')->with($notification);
        }
    }

    public function edit_about_core_values($id)
    {
        $core = AboutCoreValue::findOrFail($id);
        return view('admin.about_page.edit_core_values', compact('core'));
    }

    public function edit_about_core_values_update(Request $request)
    {
        if ($request->file('value_image')) {
            $value_image = $request->file('value_image');
            $image_name = hexdec(uniqid()) . '.' . $value_image->getClientOriginalExtension();
            Image::make($value_image)->resize(780, 780)->save('upload/core_value_images/' . $image_name);
            $value_image_url = 'upload/core_value_images/' . $image_name;
            AboutCoreValue::findOrFail($request->id)->update([
                'image' => $value_image_url,
                'title' => $request->title,
                'description' => $request->description,
            ]);
            $notification = array( 'message' => 'Value Updated Successfully', 'alert-type' => 'warning' );
            return redirect()->route('about.core-values')->with($notification);
        } else {
            AboutCoreValue::findOrFail($request->id)->update([
                'title' => $request->title,
                'description' => $request->description,
            ]);
            $notification = array( 'message' => 'Value Updated Successfully', 'alert-type' => 'warning' );
            return redirect()->route('about.core-values')->with($notification);
        }
    }

    public function about_core_values_delete($id)
    {
        AboutCoreValue::find($id)->delete();
        $notification = array( 'message' => 'Value Deleted Successfully', 'alert-type' => 'error' );
        return redirect()->back()->with($notification);
    }

    public function about_mission()
    {
        $mission = AboutMission::findOrFail(1);
        return view('admin.about_page.about_mission', compact('mission'));
    }

    public function about_mission_update(Request $request)
    {
        if ($request->file('image')) {
            $mission_image = $request->file('image');
            $mission_image_name = hexdec(uniqid()) . '.' . $mission_image->getClientOriginalExtension();
            Image::make($mission_image)->resize(780, 1041)->save('upload/about_mission_image/' . $mission_image_name);
            $mission_image_url = 'upload/about_mission_image/' . $mission_image_name;
            AboutMission::findOrFail(1)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'description' => $request->description,
                'image' => $mission_image_url,
            ]);
            $notification = array( 'message' => 'Mission Updated Successfully', 'alert-type' => 'success' );
            return redirect()->back()->with($notification);
        }
        AboutMission::findOrFail(1)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
        ]);
        $notification = array( 'message' => 'Mission Updated Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function about_vision()
    {
        $vision = AboutVision::findOrFail(1);
        return view('admin.about_page.about_vision', compact('vision'));
    }

    public function about_vision_update(Request $request)
    {
        AboutVision::findOrFail(1)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $notification = array( 'message' => 'Vision Updated Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    /*
     public function multi_image_store(Request $request)
    {
        $images = $request->file('multi_image');
        foreach ($images as $image) {
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(220, 220)->save('upload/about_multi_image/' . $name_gen);
            $save_url = 'upload/about_multi_image/' . $name_gen;
            MultiImage::insert([
                'multi_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
        }
        $notification = array( 'message' => 'Images Uploaded Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }
     public function multi_image_all()
    {
        $all_multi_image = MultiImage::all();
        return view('admin.about_page.multi_image_all', compact('all_multi_image'));
    }

    public function multi_image_edit($id)
    {
        $image = MultiImage::findOrFail($id);
        return view('admin.about_page.multi_image_edit', compact('image'));
    }

    public function multi_image_update(Request $request)
    {
        $image_id = $request->id;

        if ($request->file('multi_image')) {
            $image = $request->file('multi_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(220, 220)->save('upload/about_multi_image/' . $name_gen);
            $save_url = 'upload/about_multi_image/' . $name_gen;
            MultiImage::findOrFail($image_id)->update([
                'multi_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Image Updated Successfully',
                'alert-type' => 'success'
            );

        } else {
            $notification = array(
                'message' => 'Nothing Updated',
                'alert-type' => 'danger'
            );
        }
        return redirect()->route('about.multi-image.all')->with($notification);
    }
    public function multi_image()
    {
        return view('admin.about_page.multi_image');
    }

    */
}
