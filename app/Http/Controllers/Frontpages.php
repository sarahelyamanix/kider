<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{
    public function home(){
        $title = "Kider";
        return view ('home', compact('title'));
    }
    
    public function about(){
        $title = "About";
        return view ('about', compact('title'));
    }
    
    public function classes(){
        $title = "Classes";
        return view ('classes', compact('title'));
    }
    
    public function contactUs(){
        $title = "Contact Us";
        return view ('contactUs', compact('title'));
    }
    
    public function facilities(){
        $title = "Facilities";
        return view ('facilities', compact('title'));
    }
    
    public function team(){
        $title = "Teachers";
        return view ('team', compact('title'));
    }
    
    public function callToAction(){
        $title = "Become A Teacher";
        return view ('callToAction', compact('title'));
    }
    
    public function appointment(){
        $title = "Appointment";
        return view ('appointment', compact('title'));
    }
    
    public function testimonial(){
        $title = "Testimonials";
        return view ('testimonial', compact('title'));
    }
    
    public function error(){
        $title = "404 Error";
        return view ('error', compact('title'));
    }
}    