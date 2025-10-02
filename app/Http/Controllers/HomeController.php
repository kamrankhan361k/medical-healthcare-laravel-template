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
    public function appointment()
    {
        return view('appointment');
    }
    public function department()
    {
        return view('department');
    }
    public function DepartmentDetails()
    {
        return view('department-details');
    }
   public function CaseStudies()
    {
        return view('case-studies');
    }
    public function CaseStudiesDetails()
    {
        return view('case-studies-details');
    }
    public function services()
    {
        return view('services');
    }
    public function elements()
    {
        return view('elements');
    }
    public function ServiceDetails()
    {
        return view('service-details');
    }
    public function PricingPlan()
    {
        return view('pricing-plan');
    }
    public function Gallery()
    {
        return view('gallery');
    }
    public function WorkingProcess()
    {
        return view('working-process');
    }
    public function BeforeAfter()
    {
        return view('before-after');
    }
     public function products()
    {
        return view('products');
    }
     public function shop()
    {
        return view('shop');
    }
     public function ShopDetails()
    {
        return view('shop-details');
    }
     public function cart()
    {
        return view('cart');
    }
     public function checkout()
    {
        return view('checkout');
    }
     public function blog()
    {
        return view('blog');
    }
     public function BlogWithSidebar()
    {
        return view('blog-with-sidebar');
    }
     public function Blogdetails()
    {
        return view('blog-details');
    }
     public function contact()
    {
        return view('contact');
    }

}
