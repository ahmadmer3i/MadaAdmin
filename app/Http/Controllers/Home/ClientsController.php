<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Clients;
use App\Models\ClientsList;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use function Symfony\Component\String\u;

class ClientsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->except([ 'index', 'show' ]);
//    }


    public function client_list()
    {
        $client_list = ClientsList::all();
        return view('admin.clients_page.client_list', compact('client_list'));
    }

    public function clients_header_edit()
    {
        $client_title = Clients::findOrFail(1);
        return view('admin.clients_page.header_title', compact('client_title'));
    }

    public function clients_header_save(Request $request)
    {
        $client_id = $request->id;
        if ($request->file('client_image')) {
            $image = $request->file('client_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(960, 854)->save('upload/client_images/' . $name_gen);
            $save_url = 'upload/client_images/' . $name_gen;
            Clients::findOrFail($client_id)->update([
                'title' => $request->title,
                'image' => $save_url,
            ]);
            $notification = array( 'message' => 'Title & Image Updated Successfully', 'alert-type' => 'success' );
            return redirect()->back()->with($notification);
        }
        Clients::findOrFail($client_id)->update([
            'title' => $request->title,
            'image' => $request->client_image,
        ]);
        $notification = array( 'message' => 'Title Updated Successfully', 'alert-type' => 'success' );
        return redirect()->back()->with($notification);
    }

    public function add_client()
    {
        return view('admin.clients_page.add_client');
    }

    public function add_client_store(Request $request)
    {
        // 780 973
        // 312 60
        $client_image_url = null;
        $client_logo_url = null;
        if ($request->file('client_image')) {
            $client_image = $request->file('client_image');
            $client_image_name = hexdec(uniqid()) . '.' . $client_image->getClientOriginalExtension();
            Image::make($client_image)->resize(780, 973)->save('upload/client_images/' . $client_image_name);
            $client_image_url = 'upload/client_images/' . $client_image_name;
        }
        if ($request->file('client_logo')) {
            $client_logo = $request->file('client_logo');
            $client_logo_name = hexdec(uniqid()) . '.' . $client_logo->getClientOriginalExtension();
            Image::make($client_logo)->resize(312, 60)->save('upload/client_images/' . $client_logo_name);
            $client_logo_url = 'upload/client_images/' . $client_logo_name;
        }
        ClientsList::insert([
            'name' => $request->name,
            'description' => $request->description,
            'logo' => $client_logo_url,
            'image' => $client_image_url,
            'created_at' => Carbon::now(),
        ]);
        $notification = array( 'message' => 'Client Added Successfully', 'alert-type' => 'success' );
        return redirect()->route('clients.list')->with($notification);
    }

    public function delete_client($id)
    {
        ClientsList::find($id)->delete();
        $notification = array( 'message' => 'Client Deleted Successfully', 'alert-type' => 'error' );
        return redirect()->route('clients.list')->with($notification);
    }
}
