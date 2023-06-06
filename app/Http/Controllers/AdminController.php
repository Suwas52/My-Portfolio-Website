<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminController extends Controller
{
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => ' Admin logout  Success',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }

    public function AdminProfile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }

    public function AdminProfileStore(Request $request ){
        $id = Auth::user()->id;
        $data = User::find($id);
       
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        
        if($request->file('admin_photo')){
            $file = $request->file('admin_photo');
            @unlink(public_path('upload/admin_images/'.$data->admin_photo));
            $filename =date('sds').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['admin_photo'] = $filename ;
        }

        $data->save();

        $notification = array(
            'message' => ' Admin Profile updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function ChangePassword(){
        return view('admin.admin_change_password');
    }

    public function UpdatePassword(Request $request){
        
        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        //Match to the Old password
        if(!Hash::check($request->old_password, Auth::user()->password)){
            return back()->with("error","Old Password Doesn't Match!!");
        }

        //Update The new password

        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("success","Password Successfully Changed");
    }
}