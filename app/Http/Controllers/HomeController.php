<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function dental()
    {
        return view('dental');
    }

    public function eyecare()
    {
        return view('eye-care');
    }
    public function rehabilitations()
    {
        return view('rehabilitations');
    }

     public function physiotherapy()
    {
        return view('physiotherapy');
    }
    public function psychology()
    {
        return view('psychology');
    }
    public function doctor()
    {
        return view('doctor');
    }
    public function doctorDetails()
    {
        return view('doctor-details');
    }
    public function About()
    {
        return view('about');
    }

}
