<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use Carbon\Carbon;

class ServicesSectionController extends Controller
{
    public function ServicesSection(){
        return view('Frontend.services.services_section');
    }

    public function AllServices(){
        $services = Services::latest()->get();
        return view('Backend.services.all_services',compact('services'));
    }

    public function AddServices(){
        return view('Backend.services.add_services');
    }

    public function StoreServices(Request $request){
        Services::insert([
            'service_name' => $request->service_name,
            'service_desc' => $request->service_desc,
            'logo' => $request->logo,
            'created_at' =>Carbon::now(),
        ]);

        $notification = array(
            'message' => ' Services  is inserted in Qualification Successfully',
            'alert-type' => 'success'
         );

         return redirect()->route('all.services')->with($notification);
    }

    public function EditServices($id){
        $service = Services::findOrFail($id);

         return view("Backend.services.edit_services",compact('service'));

    }

    public function UpdateServices(Request $request){
        $service_id = $request->id;


        Services::findOrFail($service_id)->update([
            'service_name' => $request->service_name,
            'service_desc' => $request->service_desc,
            'logo' => $request->logo,
        ]);

        $notification = array(
            'message' => ' Services  is Updated Successfully',
            'alert-type' => 'success'
         );

         return redirect()->route('all.services')->with($notification);
    }

    public function DeleteServices($id){
        Services::findOrFail($id)->delete();

        $notification = array(
            'message' => ' Services Delete  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}