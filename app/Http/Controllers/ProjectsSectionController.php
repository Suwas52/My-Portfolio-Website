<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsSectionController extends Controller
{
    public function ProjectSection(){
        return view('Frontend.projects.projects_section');
    }
}