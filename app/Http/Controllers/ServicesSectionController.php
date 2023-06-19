<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesSectionController extends Controller
{
    public function ServicesSection(){
        return view('Frontend.services.services_section');
    }
}