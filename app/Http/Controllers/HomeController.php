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


}
