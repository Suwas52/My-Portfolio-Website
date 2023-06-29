<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactSectionController extends Controller
{
    public function ContactSection(){
        return view('Frontend.contact.contact_section');
    }
}