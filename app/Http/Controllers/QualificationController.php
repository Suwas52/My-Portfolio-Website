<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Experience;
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

        $request->validate([
            'education_name' => 'required',
            'academic_name' => 'required',
            'years' => 'required',
            
        ]);


        Education::findOrFail($education_id)->update([
            'education_name' => $request->education_name,
            'academic_name' => $request->academic_name,
            'years' => $request->years,
        ]);

        $notification = array(
            'message' => ' Education  is Updated Successfully',
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


    //Experience

    public function AllExperience(){
        $experiences = Experience::latest()->get();
        return view("Backend.qualification.experience.all_experience",compact('experiences'));
    }

    public function AddExperience(){
        return view("Backend.qualification.experience.add_experience");
    }

    public function StoreExperience(Request $request){

        Experience::insert([
            'project' => $request->project,
            'field' => $request->field,
            'years' => $request->years,
            'created_at' =>Carbon::now(),
        ]);

        $notification = array(
            'message' => ' Experience  is inserted in Qualification Successfully',
            'alert-type' => 'success'
         );

         return redirect()->route('all.experience')->with($notification);
    }

    public function EditExperience($id){
        $experience = Experience::findOrFail($id);

        return view("Backend.qualification.experience.edit_experience",compact('experience'));

    }

    public function UpdateExperience(Request $request){
        
        $experience_id = $request->id;

        Experience::findOrFail($experience_id)->update([
            'project' => $request->project,
            'field' => $request->field,
            'years' => $request->years,
        ]);

        $notification = array(
            'message' => ' Experience  is Updated Successfull',
            'alert-type' => 'success'
         );

         return redirect()->route('all.experience')->with($notification);
       
    }

    public function DeleteExperience($id){
        
        Experience::findOrFail($id)->delete();

        $notification = array(
            'message' => ' Experience Delete  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    
}