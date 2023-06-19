<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skills;
use App\Models\SkillData;
use Image;

class SkillsSectionController extends Controller
{
    public function AllSkillsTitle(){

        $skills_title = Skills::latest()->get();
        return view('Backend.skills_section.all_skill_title',compact('skills_title'));
    }

    public function AddSkillTitle(){
        return view('Backend.skills_section.add_skill_title');
    }

    public function StoreSkillTitle(Request $request){
        Skills::insert([
            'skill_title' => $request->skill_title,
        ]);

        $notification = array(
            'message' => ' Skill Title  is Add Successfull',
            'alert-type' => 'success'
         );

         return redirect()->route('all.skills.title')->with($notification);
    }

    public function EditSkillTitle($id){
        $skills_title_id = Skills::find($id);
        return view('Backend.skills_section.edit_skill_title', compact('skills_title_id'));

    }

    public function UpdateSkillTitle(Request $request){

        $skill_title_id = $request->id;

        Skills::findOrFail($skill_title_id)->update([
            'skill_title' => $request->skill_title,
        ]);

        $notification = array(
            'message' => ' Skill Title  is Updated Successfull',
            'alert-type' => 'success'
         );

         return redirect()->route('all.skills.title')->with($notification);

    }

    //Skill Data part

    public function AllSkillData($id){
        $skill_title_id = Skills::findOrFail($id);
       
        $skills_data = SkillData::where('skill_title_id',$skill_title_id->id)->latest()->get();
        // $skills_data = SkillData::latest()->get();
        return view('Backend.skills_section.skill_data_all', compact('skills_data','skill_title_id'));
    }

    public function AddSkill($id){
        $skill_title_id = Skills::findOrFail($id);

        return view('Backend.skills_section.add_skill',compact('skill_title_id'));
    }

    public function StoreSkillData(Request $request){
 
        
            $image = $request->file('skill_image');
            $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1000,1200)->save('upload/skill_images/'.$img_name_gen);
            $save_img_url = 'upload/skill_images/'.$img_name_gen;
            SkillData::insert([
                'skill_title_id' => $request->skill_title_id ,
                'skill_name' => $request->skill_name,
                'skill_image' => $save_img_url,
            ]);

            $notification = array(
                'message' => ' Skill Inserted with image  Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);

    }

    public function EditSkillData($id){
        $skills_data = SkillData::find($id);
        return view('Backend.skills_section.edit_skill_data',compact('skills_data'));
    }


    public function UpdateSkillData(Request $request){
        $skill_data_id = $request->id;
        $skill_title_id =$request->skill_title_id;
        $old_image = $request->old_img;

        $image = $request->file('skill_image');
        $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(960,960)->save('upload/skill_images/'.$img_name_gen);
        $save_img_url = 'upload/skill_images/'.$img_name_gen;

        if(file_exists($old_image)){
            unlink($old_image);
        }

        SkillData::find($skill_data_id)->update([
            'skill_title_id' => $request->skill_title_id ,
            'skill_name' => $request->skill_name,
            'skill_image' => $save_img_url,
        ]);

        $notification = array(
            'message' => ' Skill updated  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function DeleteSkillData($id){

        $skill_data =SkillData::find($id);
        $skill_image =$skill_data->skill_image;

        unlink($skill_image);

        SkillData::find($id)->delete();

        $notification = array(
            'message' => ' Skill Delete  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
   
}