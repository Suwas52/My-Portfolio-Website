<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioCategory;
use App\Models\portfolio;
use Image;

class PortfolioSectionController extends Controller
{
    public function PortfolioSection(){
        return view('Frontend.portfolio.portfolio_section');
    }

    public function AllPortfolioTitle(){
        $portfolio_title = PortfolioCategory::latest()->get();
        return view('Backend.portfolio.all_portfolio_category',compact('portfolio_title'));
    }

    public function AddPortfolioTitle(){
        return view('Backend.portfolio.add_portfolio_category');
    }

    public function StorePortfolioTitle(Request $request){
        $validated = $request->validate([
            'portfolio_title' => 'required',
        ]);

        PortfolioCategory::insert([
            'portfolio_title' => $request->portfolio_title,
        ]);

        $notification = array(
            'message' => ' Portfolio Title  is Add Successfull',
            'alert-type' => 'success'
         );

         return redirect()->route('all.portfolio_title')->with($notification);
    }

    public function EditPortfolioTitle($id){
        $title_id = PortfolioCategory::findOrFail($id);
        return view('Backend.portfolio.edit_portfolio_title',compact('title_id'));

    }

    public function UpdatePortfolioTitle(Request $request){
        $title_id = $request->id;

        PortfolioCategory::findOrFail($title_id)->update([
            'portfolio_title' => $request->portfolio_title,
        ]);

        $notification = array(
            'message' => ' Portfolio Title updated Successfull',
            'alert-type' => 'success'
         );

         return redirect()->route('all.portfolio_title')->with($notification);
    }


    // Portfolios Details part

    public function AllPortfolios(){
        $portfolios  = portfolio::latest()->get();
        return view('Backend.portfolio.all_portfolio',compact('portfolios'));
    }

    public function AddPortfolios(){
        $portfolio_cat = PortfolioCategory::orderBy('portfolio_title','ASC')->get();
        
        return view('Backend.portfolio.add_portfolios',compact('portfolio_cat'));
    }

    public function StorePortfolios(Request $request){
        $validated = $request->validate([
            'portfolio_cat_id' => 'required',
            'portfolio_name' => 'required',
            'portfolio_img' => 'required',
            'portfolio_url' => 'required',
            'portfolio_desc' => 'required',
        ]);

        $image = $request->file('portfolio_img');
        $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(640,427)->save('upload/portfolio_images/'.$img_name_gen);
        $portfolio_img = 'upload/portfolio_images/'.$img_name_gen;


        portfolio::insert([
            'portfolio_cat_id' => $request->portfolio_cat_id ,
            'portfolio_name' => $request->portfolio_name ,
            'portfolio_url' => $request->portfolio_url ,
            'portfolio_desc' => $request->portfolio_desc,
            'portfolio_img' => $portfolio_img,
         ]);

        $notification = array(
            'message' => ' Portfolios Inserted  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function EditPortfolio($id){
        $portfolio_cat = PortfolioCategory::orderBy('portfolio_title','ASC')->get();
        $portfolio = portfolio::findOrFail($id);
        return view('Backend.portfolio.edit_portfolios',compact('portfolio','portfolio_cat'));
    }

    public function UpdatePortfolio(Request $request){
        


        $portfolio_id= $request->id;
        $old_image = $request->old_img;

        if($request->file('brand_logo')){

            $image = $request->file('portfolio_img');
            $img_name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(640,427)->save('upload/portfolio_images/'.$img_name_gen);
            $portfolio_img = 'upload/portfolio_images/'.$img_name_gen;

            if(file_exists($old_image)){
                unlink($old_image);
            }

            portfolio::find($portfolio_id)->update([
                'portfolio_cat_id' => $request->portfolio_cat_id ,
                'portfolio_name' => $request->portfolio_name ,
                'portfolio_url' => $request->portfolio_url ,
                'portfolio_desc' => $request->portfolio_desc,
                'portfolio_img' => $portfolio_img,
            ]);


            $notification = array(
                'message' => ' Portfolio updated with Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
        else{
            portfolio::find($portfolio_id)->update([
                'portfolio_cat_id' => $request->portfolio_cat_id ,
                'portfolio_name' => $request->portfolio_name ,
                'portfolio_url' => $request->portfolio_url ,
                'portfolio_desc' => $request->portfolio_desc,
            ]);


            $notification = array(
                'message' => ' Portfolio updated without Image Successfully',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        
        }
    }

    public function DeletePortfolio($id){
        $portfolio_id =portfolio::findOrFail($id);
        $portfolio_img =$portfolio_id->portfolio_img;

        unlink($portfolio_img);

        portfolio::findOrFail($id)->delete();

        $notification = array(
            'message' => ' Portfolio Delete  Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

   
}