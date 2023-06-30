<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSection;
use Image;

class HomeSectionController extends Controller
{
    public function HomeSlider(){
        $homeSection = HomeSection::findOrFail(1);
        return view('Admin.index',compact('homeSection'));
    }

    public function UpdateHome(Request $request){
        $home_id = $request->id;

        if( $request->file('home_image')) {
            $image = $request->file('home_image');
            $home_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        
            Image::make($image)->resize(606,530)->save('upload/home_images/'.$home_name_gen);
            $save_image = 'upload/home_images/'.$home_name_gen;

            HomeSection::findOrFail($home_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'home_des' => $request->home_des,
                'home_image' => $save_image,
             ]);

            $notification = array(
                'message' => ' Home Section is updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

        }else {
            HomeSection::findOrFail($home_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'home_des' => $request->home_des,
             ]);

            $notification = array(
                'message' => ' Home Section is updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
    }
}