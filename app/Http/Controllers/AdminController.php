<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
}