<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\ContactAdress;
use App\Models\ContactEmail;
use App\Models\ContactEmailList;
use App\Models\ContactSocialMedia;
use App\Models\ContactWhy;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class ContactController extends Controller
{
    public function contact_us()
    {
        $contact_title = Contact::findOrFail(1);
        return view('frontend.contact_us', compact('contact_title'));
    }

    public function contact_us_title()
    {
        $contact_title = Contact::findOrFail(1);
        return view('admin.contact_page.edit_title', compact('contact_title'));
    }

    public function contact_us_title_update(Request $request)
    {
        if ($request->file('contact_image')) {
            $contact_image = $request->file('contact_image');
            $image_name = hexdec(uniqid()) . '.' . $contact_image->getClientOriginalExtension();
            Image::make($contact_image)->resize(960, 854)->save('upload/contact_images/' . $image_name);
            $image_url = 'upload/contact_images/' . $image_name;
            Contact::findOrFail(1)->update([
                'title' => $request->title,
                'image' => $image_url,
            ]);
            $notification = array( 'message', 'Contact Header Updated Successfully', 'alert-type' => 'success' );
            return redirect()->back()->with($notification);
        }
        Contact::findOrFail(1)->update([
            'title' => $request->title,
        ]);
        $notification = array( 'message', 'Contact Header Updated Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function contact_us_why()
    {
        $contact_why = ContactWhy::findOrFail(1);
        return view('admin.contact_page.contact_why', compact('contact_why'));
    }

    public function contact_us_why_update(Request $request)
    {
        $why_icon_url = null;
        $why_image_url = null;
        if ($request->file('why_image')) {
            $why_image = $request->file('why_image');
            $why_image_name = hexdec(uniqid()) . '.' . $why_image->getClientOriginalExtension();
            Image::make($why_image)->resize(780, 1041)->save('upload/contact_images/' . $why_image_name);
            $why_image_url = 'upload/contact_images/' . $why_image_name;
        }
        if ($request->file('why_icon')) {
            $why_icon = $request->file('why_icon');
            $why_icon_name = hexdec(uniqid()) . '.' . $why_icon->getClientOriginalExtension();
            Image::make($why_icon)->resize(780, 1041)->save('upload/contact_images/' . $why_icon_name);
            $why_icon_url = 'upload/contact_images/' . $why_icon_name;
        }
        if ($why_image_url != null && $why_icon_url != null) {
            ContactWhy::findOrFail(1)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'image' => $why_image_url,
                'icon' => $why_icon_url,
            ]);
            $notification = array( 'message' => 'Why Section Updated Successfully', 'alert-type' => 'warning' );
            return redirect()->back()->with($notification);
        } else if ($why_image_url != null) {
            ContactWhy::findOrFail(1)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'image' => $why_image_url,
            ]);
            $notification = array( 'message' => 'Why Section Updated Successfully', 'alert-type' => 'warning' );
            return redirect()->back()->with($notification);
        } else if ($why_icon_url != null) {
            ContactWhy::findOrFail(1)->update([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'icon' => $why_icon_url,
            ]);
            $notification = array( 'message' => 'Why Section Updated Successfully', 'alert-type' => 'warning' );
            return redirect()->back()->with($notification);
        }
        ContactWhy::findOrFail(1)->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
        ]);
        $notification = array( 'message' => 'Why Section Updated Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function contact_address()
    {
        $contact_address = ContactAdress::findOrFail(1);
        return view('admin.contact_page.contact_address', compact('contact_address'));
    }

    public function contact_address_update(Request $request)
    {
        if ($request->file('address_icon')) {
            $address_icon = $request->file('address_icon');
            $address_icon_name = hexdec(uniqid()) . '.' . $address_icon->getClientOriginalExtension();
            Image::make($address_icon)->resize(60, 60)->save('upload/contact_images/' . $address_icon_name);
            $address_icon_url = 'upload/contact_images/' . $address_icon_name;
            ContactAdress::findOrFail(1)->update([
                'office' => $request->office,
                'building_name' => $request->building_name,
                'street_name' => $request->street_name,
                'city_country' => $request->city_country,
                'address_icon' => $address_icon_url
            ]);
            $notification = array( 'message' => 'Address Updated Successfully', 'alert-type' => 'warning' );
            return redirect()->back()->with($notification);
        }
        ContactAdress::findOrFail(1)->update([
            'office' => $request->office,
            'building_name' => $request->building_name,
            'street_name' => $request->street_name,
            'city_country' => $request->city_country,
        ]);
        $notification = array( 'message' => 'Address Updated Successfully', 'alert-type' => 'warning' );
        return redirect()->back()->with($notification);
    }

    public function contact_social_media_links()
    {
        $social_media = ContactSocialMedia::all();
        return view('admin.contact_page.contact_social_media', compact('social_media'));
    }

    public function contact_social_media_links_add()
    {
        return view('admin.contact_page.add_social_media');
    }

    public function contact_social_media_links_store(Request $request)
    {
        ContactSocialMedia::insert([
            'name' => $request->name,
            'link' => $request->link,
            'icon' => $request->icon,
            'icon_color' => $request->icon_color,
            'created_at' => Carbon::now(),
        ]);
        $notification = array( 'message' => 'Social Link Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('contact-us.social-media')->with($notification);
    }

    public function contact_social_media_links_edit($id)
    {
        $social_link = ContactSocialMedia::findOrFail($id);
        return view('admin.contact_page.edit_social_media', compact('social_link'));
    }

    public function contact_social_media_links_update(Request $request)
    {
        ContactSocialMedia::findOrFail($request->id)->update([
            'name' => $request->name,
            'link' => $request->link,
            'icon' => $request->icon,
            'icon_color' => $request->icon_color,
        ]);
        $notification = array( 'message' => 'Social Link Updated Successfully', 'alert-type' => 'warning' );
        return redirect()->route('contact-us.social-media')->with($notification);
    }

    public function contact_social_media_links_delete($id)
    {
        ContactSocialMedia::findOrFail($id)->delete();
        $notification = array( 'message' => 'Social Link Deleted Successfully', 'alert-type' => 'danger' );
        return redirect()->back()->with($notification);
    }

    public function contact_email()
    {
        $email = ContactEmail::find(1);
        return view('admin.contact_page.contact_email', compact('email'));
    }

    public function contact_email_add()
    {
        return view('admin.contact_page.contact_email_add');
    }

    public function contact_email_store(Request $request)
    {
        ContactEmailList::insert([
            'email' => $request->email,
            'contact_email_id' => 1,
            'created_at' => Carbon::now(),
        ]);
        $notification = array( 'message' => 'Email Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('contact-us.email')->with($notification);
    }

}
