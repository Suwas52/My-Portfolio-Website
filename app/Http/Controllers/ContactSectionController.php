<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Carbon\Carbon;

class ContactSectionController extends Controller
{
    public function ContactSection(){
        return view('Frontend.contact.contact_section');
    }

    public function ContactMessage(Request $request){
    
        $request->validate([
            'contact_name' => 'required',
            'contact_email' => 'required|regex:/(.+)@(.+)\.(.+)/i',
            'message' => 'required',
        ]);

        Contact::insert([
            'contact_name' => $request->contact_name,
            'contact_email' => $request->contact_email,
            'message' => $request->message,
            'created_at' =>Carbon::now(),
            
         ]);

        $notification = array(
            'message' => ' Contact Successful',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        
    }
}