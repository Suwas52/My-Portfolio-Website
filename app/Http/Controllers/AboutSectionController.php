<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\About;
use Carbon\Carbon;

class AboutSectionController extends Controller
{
    public function AboutPart(){
        return view('Frontend.about.about_section');
    }

    public function AllAboutPage(){
        $aboutSection = About::findOrFail(1);
        return view('Backend.about_page.about_page_all',compact('aboutSection'));
    }

    public function UpdateAbout(Request $request){
        $about_id = $request->id;

        About::findOrFail($about_id)->update([
                'about_name' => $request->about_name,
                'about_profession' => $request->about_profession,
                'short_des' => $request->short_des,
                'long_des' => $request->long_des,
                'about_end' => $request->about_end,
                'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => ' About Section is updated Successfully',
            'alert-type' => 'success'
         );

         return redirect()->back()->with($notification);
        
    }
}