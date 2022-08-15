<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth')->except([ 'index', 'show' ]);
//    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


        $notification = array( 'message' => 'You Logged Out Successfully', 'alert-type' => 'error' );

        return redirect('/login')->with($notification);
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $admin_data = User::find($id);
        return view('admin.admin_profile_view', compact('admin_data'));
    }

    public function edit_profile()
    {
        $id = Auth::user()->id;
        $edit_data = User::find($id);

        return view('admin.admin_profile_edit', compact('edit_data'));
    }

    public function store_profile(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data[ 'profile_image' ] = $filename;
        }
        $data->save();

        $notification = array( 'message' => 'Admin Profile Updated Successfully', 'alert-type' => 'success' );

        return redirect()->route('admin.profile')->with($notification);
    }

    public function change_password()
    {
        return view('admin.admin_change_password');
    }

    public function update_password(Request $request)
    {
        $validate_date = $request->validate([
            'old_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        $hashed_password = Auth::user()->password;
        if (Hash::check($request->old_password, $hashed_password)) {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->password);
            $users->save();

            session()->flash('message', 'Password Changed Successfully');
            return redirect()->back();
        } else {
            session()->flash('message', 'Your Old Password is Incorrect');
            return redirect()->back();
        }
    }

    public function users_list()
    {
        $users = User::all();
        return view('admin.users.all_users', compact('users'));
    }

    public function add_user()
    {
        return view('admin.users.add_user');
    }

    public function store_user(Request $request)
    {
        $request->validate([
            'name' => [ 'required', 'string', 'max:255' ],
            'username' => [ 'required', 'string', 'max:255', 'unique:users' ],
            'email' => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
            'password' => [ 'required', 'confirmed', Rules\Password::defaults() ],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        return redirect()->back()->with(array( 'message' => 'User Register Successfully', 'alert-message' => 'success' ));
    }
}
