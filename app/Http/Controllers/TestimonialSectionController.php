<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Carbon\Carbon;
use Image;

class TestimonialSectionController extends Controller
{

    

    public function AllTestimonial(){
        $testimonials = Testimonial::latest()->get();
        return view('Backend.testimonial.all_testimonial',compact('testimonials'));
    }

    public function AddTestimonials(){
        return view('Backend.testimonial.add_testimonial');

    }

    public function StoreTestimonial(Request $request){

        if($request->file('client_img')){

            $image = $request->file('client_img');
            $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(600,600)->save('upload/testimonial_images/'.$img_name_gen);
            $testimonial_img = 'upload/testimonial_images/'.$img_name_gen;


            Testimonial::insert([
                'client_name' => $request->client_name ,
                'project_name' => $request->project_name ,
                'client_desc' => $request->client_desc ,
                'client_img' => $testimonial_img,
                'created_at' =>Carbon::now(),
            ]);


            $notification = array(
                'message' => ' Testimonial Inserted with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
        else{
            Testimonial::insert([
                'client_name' => $request->client_name ,
                'project_name' => $request->project_name ,
                'client_desc' => $request->client_desc ,
                'created_at' =>Carbon::now(),
            ]);


            $notification = array(
                'message' => ' Testimonial Inserted without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        
        }
        

    }

    public function EditTestimonial($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('Backend.testimonial.edit_testimonial',compact('testimonial'));
    
    }

    public function UpdateTestimonial(Request $request){

        $testimonial_id= $request->id;
        $old_image = $request->old_img;


        if($request->file('client_img')){

            $image = $request->file('client_img');
            $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(600,600)->save('upload/testimonial_images/'.$img_name_gen);
            $testimonial_img = 'upload/testimonial_images/'.$img_name_gen;

            if(file_exists($old_image)){
                unlink($old_image);
            }

            Testimonial::find($testimonial_id)->update([
                'client_name' => $request->client_name ,
                'project_name' => $request->project_name ,
                'client_desc' => $request->client_desc ,
                'client_img' => $testimonial_img,
            ]);


            $notification = array(
                'message' => ' Testimonial updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
        else{
            Testimonial::find($testimonial_id)->update([
                'client_name' => $request->client_name ,
                'project_name' => $request->project_name ,
                'client_desc' => $request->client_desc ,
            ]);

            $notification = array(
                'message' => ' Testimonial updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        
        }
        
    }

    
    public function DeleteTestimonial($id){
        $testimonial_id =Testimonial::findOrFail($id);
        $client_img =$testimonial_id->client_img;

        if(file_exists($client_img)){
            unlink($client_img);
        }

        Testimonial::findOrFail($id)->delete();

        $notification = array(
            'message' => ' Testimonial Delete  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }
}