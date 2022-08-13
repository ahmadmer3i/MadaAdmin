<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use App\Models\PartnersList;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class PartnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'show' ]);
    }

    public function partners_title()
    {
        $partners = Partners::findOrFail(1);
        return view('admin.partners_page.partners_title', compact('partners'));
    }

    public function partners_title_update(Request $request)
    {
        if ($request->file('partner_image')) {
            $image = $request->file('partner_image');
            $image_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(960, 854)->save('upload/partners_images/' . $image_name);
            $image_url = 'upload/partners_images/' . $image_name;
            Partners::findOrFail(1)->update([
                'title' => $request->title,
                'image' => $image_url,
            ]);
            $notification = array( 'message' => 'Partners Title Page Updated Successfully', 'alert-type' => 'success' );
            return redirect()->back()->with($notification);
        }
        Partners::findOrFail(1)->update([
            'title' => $request->title,
        ]);
        $notification = array( 'message' => 'Partners Title Page Updated Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function partners_list()
    {
        $partners = PartnersList::all();
        return view('admin.partners_page.partners_list', compact('partners'));
    }

    public function add_partner()
    {
        return view('admin.partners_page.add_partner');
    }

    public function add_partner_store(Request $request)
    {
        $partner_image_url = null;
        $partner_logo_url = null;
        if ($request->file('partner_image')) {
            $partner_image = $request->file('partner_image');
            $image_name = hexdec(uniqid()) . '.' . $partner_image->getClientOriginalExtension();
            Image::make($partner_image)->resize(780, 973)->save('upload/partners_image' . $image_name);
            $partner_image_url = 'upload/partners_image' . $image_name;
        }
        if ($request->file('partner_logo')) {
            $partner_logo = $request->file('partner_logo');
            $logo_name = hexdec(uniqid()) . '.' . $partner_logo->getClientOriginalExtension();
            Image::make($partner_logo)->resize(312, 60)->save('upload/partners_image' . $logo_name);
            $partner_logo_url = 'upload/partners_image' . $logo_name;
        }
        PartnersList::insert([
            'image' => $partner_image_url,
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $partner_logo_url,
            'created_at' => Carbon::now(),
        ]);
        $notification = array( 'message' => 'Partner Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('partners.list')->with($notification);
    }

    public function edit_partner($id)
    {
        $partner = PartnersList::findOrFail($id);

        return view('admin.partners_page.edit_partner', compact('partner'));

    }

    public function edit_partner_update(Request $request)
    {
        $partner_image_url = null;
        $partner_logo_url = null;
        if ($request->file('partner_image')) {
            $partner_image = $request->file('partner_image');
            $partner_image_name = hexdec(uniqid()) . '.' . $partner_image->getClientOriginalExtension();
            Image::make($partner_image)->resize(780, 973)->save('upload/partners_images/' . $partner_image_name);
            $partner_image_url = 'upload/partners_images/' . $partner_image_name;
        }
        if ($request->file('partner_logo')) {
            $partner_logo = $request->file('partner_logo');
            $partner_logo_name = hexdec(uniqid()) . '.' . $partner_logo->getClientOriginalExtension();
            Image::make($partner_logo)->resize(780, 973)->save('upload/partners_images/' . $partner_logo_name);
            $partner_logo_url = 'upload/partners_images/' . $partner_logo_name;
        }
        if ($partner_logo_url != null && $partner_image_url != null) {
            PartnersList::findOrFail($request->id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $partner_image_url,
                'logo' => $partner_logo_url,
            ]);
            $notification = array( 'message' => 'Partner Updated Successfully', 'alert-type' => 'success' );
            return redirect()->route('partners.list')->with($notification);
        } else if ($partner_logo_url != null) {
            PartnersList::findOrFail($request->id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'logo' => $partner_logo_url,
            ]);
            $notification = array( 'message' => 'Partner Updated Successfully', 'alert-type' => 'success' );
            return redirect()->route('partners.list')->with($notification);
        } else if ($partner_image_url != null) {
            PartnersList::findOrFail($request->id)->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $partner_image_url,
            ]);
            $notification = array( 'message' => 'Partner Updated Successfully', 'alert-type' => 'success' );
            return redirect()->route('partners.list')->with($notification);
        }
        PartnersList::findOrFail($request->id)->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);
        $notification = array( 'message' => 'Partner Updated Successfully', 'alert-type' => 'success' );
        return redirect()->route('partners.list')->with($notification);
    }

    public function delete_partner($id)
    {
        PartnersList::findOrFail($id)->delete();
        $notification = array( 'message' => 'Partner Deleted Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

}
