<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Carbon\Carbon;

class QualificationController extends Controller
{
    public function AllEducation(){
        $educations = Education::latest()->get();
        return view("Backend.qualification.education.all_education",compact('educations'));
    }

    public function AddEducation(){
        return view("Backend.qualification.education.add_education");
    }

    public function StoreEducation(Request $request){

        $request->validate([
            'education_name' => 'required',
            'academic_name' => 'required',
            'years' => 'required',
            
        ]);

        Education::insert([
            'education_name' => $request->education_name,
            'academic_name' => $request->academic_name,
            'years' => $request->years,
            'created_at' =>Carbon::now(),
        ]);

        $notification = array(
            'message' => ' Education  is inserted in Qualification Successfull',
            'alert-type' => 'success'
         );

         return redirect()->route('all.education')->with($notification);
    }

    public function EditEducation($id){
        $education = Education::findOrFail($id);

         return view("Backend.qualification.education.edit_education",compact('education'));

    }

    public function UpdateEducation(Request $request){
        
        $education_id = $request->id;

        Education::findOrFail($education_id)->update([
            'education_name' => $request->education_name,
            'academic_name' => $request->academic_name,
            'years' => $request->years,
        ]);

        $notification = array(
            'message' => ' Education  is Updated Successfull',
            'alert-type' => 'success'
         );

         return redirect()->route('all.education')->with($notification);
       
    }

    public function DeleteEducation($id){
        
        Education::findOrFail($id)->delete();

        $notification = array(
            'message' => ' Education Delete  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    
}