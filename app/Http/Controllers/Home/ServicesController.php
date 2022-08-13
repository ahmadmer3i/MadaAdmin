<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Services;
use App\Models\ServicesCategores;
use App\Models\ServicesCategoresLists;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class ServicesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }

    public function services_title()
    {
        $services_title = Services::find(1);

        return view('admin.services_page.title_section', compact('services_title'));
    }

    public function services_title_update(Request $request)
    {
        $services = $request->id;

        if ($request->file('services_image')) {
            $image = $request->file('services_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(960, 854)->save('upload/services_images/' . $name_gen);
            $save_url = 'upload/services_images/' . $name_gen;
            Services::findOrFail($services)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'home_title' => $request->home_title,
                'image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Services Title Page & Image Updated Successfully',
                'alert-type' => 'success'
            );

        } else {
            Services::findOrFail($services)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'home_title' => $request->home_title,
            ]);
            $notification = array(
                'message' => 'Services Title Page Updated Successfully',
                'alert-type' => 'success'
            );
        }
        return redirect()->back()->with($notification);
    }

    public function service_category_edit($id)
    {
        $service_category_edit = ServicesCategores::findOrFail($id);
        return view('admin.services_page.service_category_edit', compact('service_category_edit'));
    }

    public function service_category_update(Request $request)
    {
        $category_id = $request->id;
        $home_image_url = null;
        $service_image_url = null;
        if ($request->file('category_image')) {
            $image = $request->file('category_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(596, 1297,)->save('upload/category_images/' . $name_gen);
            $service_image_url = 'upload/category_images/' . $name_gen;
        }
        if ($request->file('home_image')) {
            $home_image = $request->file('home_image');
            $home_image_name = hexdec(uniqid()) . '.' . $home_image->getClientOriginalExtension();
            Image::make($home_image)->resize(622, 911,)->save('upload/category_images/' . $home_image_name);
            $home_image_url = 'upload/category_images/' . $home_image_name;
        }
        if ($home_image_url != null && $service_image_url != null) {
            ServicesCategores::findOrFail($category_id)->update([
                'service_title' => $request->service_title,
                'service_subtitle' => $request->service_subtitle,
                'service_text' => $request->service_text,
                'home_subtitle' => $request->home_subtitle,
                'image' => $service_image_url,
                'home_image' => $home_image_url,
            ]);
            $notification = array(
                'message' => 'Updated Successfully',
                'alert-type' => 'warning'
            );
            return redirect()->route('services.title')->with($notification);
        } else if ($home_image_url != null) {
            ServicesCategores::findOrFail($category_id)->update([
                'service_title' => $request->service_title,
                'service_subtitle' => $request->service_subtitle,
                'service_text' => $request->service_text,
                'home_subtitle' => $request->home_subtitle,
                'home_image' => $home_image_url,
            ]);
            $notification = array(
                'message' => 'Updated Successfully',
                'alert-type' => 'warning'
            );
            return redirect()->route('services.title')->with($notification);

        } else if ($service_image_url != null) {
            ServicesCategores::findOrFail($category_id)->update([
                'service_title' => $request->service_title,
                'service_subtitle' => $request->service_subtitle,
                'service_text' => $request->service_text,
                'home_subtitle' => $request->home_subtitle,
                'image' => $service_image_url,
            ]);
            $notification = array(
                'message' => 'Updated Successfully',
                'alert-type' => 'warning'
            );
            return redirect()->route('services.title')->with($notification);
        }
        ServicesCategores::findOrFail($category_id)->update([
            'service_title' => $request->service_title,
            'service_subtitle' => $request->service_subtitle,
            'service_text' => $request->service_text,
            'home_subtitle' => $request->home_subtitle,
        ]);
        $notification = array(
            'message' => 'Updated Successfully',
            'alert-type' => 'warning'
        );
        return redirect()->route('services.title')->with($notification);
    }

    public function add_service_category()
    {
        $category = Services::findOrFail(1);
        return view('admin.services_page.add_category', compact('category'));
    }

    public function service_category_store(Request $request)
    {
        $home_image_url = null;
        $service_image_url = null;
        if ($request->file('category_image')) {
            $image = $request->file('category_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(596, 1297,)->save('upload/category_images/' . $name_gen);
            $service_image_url = 'upload/category_images/' . $name_gen;
        }
        if ($request->file('home_image')) {
            $home_image = $request->file('home_image');
            $home_image_name = hexdec(uniqid()) . '.' . $home_image->getClientOriginalExtension();
            Image::make($home_image)->resize(622, 911,)->save('upload/category_images/' . $home_image_name);
            $home_image_url = 'upload/category_images/' . $home_image_name;
        }
        if ($home_image_url != null && $service_image_url != null) {
            ServicesCategores::insert([
                'service_title' => $request->service_title,
                'services_id' => 1,
                'service_subtitle' => $request->service_subtitle,
                'service_text' => $request->service_text,
                'home_subtitle' => $request->home_subtitle,
                'image' => $service_image_url,
                'home_image' => $home_image_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Service Category Added Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('services.title')->with($notification);
        } else if ($home_image_url != null) {
            ServicesCategores::insert([
                'service_title' => $request->service_title,
                'services_id' => 1,
                'service_subtitle' => $request->service_subtitle,
                'service_text' => $request->service_text,
                'home_subtitle' => $request->home_subtitle,
                'home_image' => $home_image_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Service Category Added Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('services.title')->with($notification);
        } else if ($service_image_url != null) {
            ServicesCategores::insert([
                'service_title' => $request->service_title,
                'services_id' => 1,
                'service_subtitle' => $request->service_subtitle,
                'service_text' => $request->service_text,
                'home_subtitle' => $request->home_subtitle,
                'image' => $service_image_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Service Category Added Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('services.title')->with($notification);
        }
        ServicesCategores::insert([
            'service_title' => $request->service_title,
            'services_id' => 1,
            'service_subtitle' => $request->service_subtitle,
            'service_text' => $request->service_text,
            'home_subtitle' => $request->home_subtitle,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Service Category Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('services.title')->with($notification);

    }

    public function add_service_category_item($id)
    {
        $category = ServicesCategores::findOrFail($id);
        return view('admin.services_page.add_category_item', compact('category'));

    }

    public function service_category_item_store(Request $request)
    {
        if ($request->service_item) {
            ServicesCategoresLists::insert([
                'created_at' => Carbon::now(),
                'service_item' => $request->service_item,
                'services_categores_id' => $request->id,
            ]);
            $notification = array( 'message' => 'Category Item Added Successfully', 'alert-type' => 'success' );
            return redirect()->route('services.category.edit', [ 'id' => $request->id ])->with($notification);
        } else {
            $notification = array( 'message' => 'Nothing Added', 'alert-type' => 'danger' );
            return redirect()->route('services.category.edit', [ 'id' => $request->id ])->with($notification);
        }
    }

    public function service_category_item_edit($id)
    {
        $item = ServicesCategoresLists::findOrFail($id);
        return view('admin.services_page.edit_category_item', compact('item'));
    }

    public function service_category_item_delete($id)
    {
        ServicesCategoresLists::findOrFail($id)->delete();
        $notification = array( 'message' => 'Item Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function service_category_item_update(Request $request)
    {
        $item_id = $request->id;
        $item = ServicesCategoresLists::findOrFail($item_id);
        ServicesCategoresLists::findOrFail($item_id)->update([
            'service_item' => $request->service_item,
        ]);
        $notification = array( 'message' => 'Item Updated Successfully', 'alert-type' => 'success' );
        return redirect()->route('services.category.edit', [ 'id' => $item->services_categores_id ])->with($notification);
    }
}
