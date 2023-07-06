<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function FooterSection(){
        $footerSection = Footer::findOrFail(1);
        return view('Backend.footer.footer_section',compact('footerSection'));
    }

    public function UpdateFooter(Request $request){
        $footer_id = $request->id;

        Footer::findOrFail($footer_id)->update([
            'logo' => $request->logo,
            'footer_desc' => $request->footer_desc,
            'location' => $request->location,
            'phone_no' => $request->phone_no,
            'email' => $request->email,
            'copy_right' => $request->copy_right,
         ]);

        $notification = array(
            'message' => ' Footer Section is updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}