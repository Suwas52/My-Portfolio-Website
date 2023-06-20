<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PortfolioCategory;

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

   
}