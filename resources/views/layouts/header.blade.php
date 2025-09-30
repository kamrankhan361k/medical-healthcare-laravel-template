<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="ThemeDox">
  <!-- Favicon Icon -->
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
  <!-- Site Title -->
  <title>Medixal - Medical and Healthcare Template</title>
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/light-gallerr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/jquery-timepicker.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="cs_theme_2">
  <!-- Start Preloader -->
  <div class="cs_preloader">
    <div class="cs_preloader_in">
      <div class="cs_wave_first">
        <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" /></svg>
      </div>
      <div class="cs_wave_second">
        <svg enable-background="new 0 0 300.08 300.08" viewBox="0 0 300.08 300.08" xmlns="http://www.w3.org/2000/svg"><path d="m293.26 184.14h-82.877l-12.692-76.138c-.546-3.287-3.396-5.701-6.718-5.701-.034 0-.061 0-.089 0-3.369.027-6.199 2.523-6.677 5.845l-12.507 87.602-14.874-148.69c-.355-3.43-3.205-6.056-6.643-6.138-.048 0-.096 0-.143 0-3.39 0-6.274 2.489-6.752 5.852l-19.621 137.368h-9.405l-12.221-42.782c-.866-3.028-3.812-5.149-6.8-4.944-3.13.109-5.777 2.332-6.431 5.395l-8.941 42.332h-73.049c-3.771 0-6.82 3.049-6.82 6.82 0 3.778 3.049 6.82 6.82 6.82h78.566c3.219 0 6.002-2.251 6.67-5.408l4.406-20.856 6.09 21.313c.839 2.939 3.526 4.951 6.568 4.951h20.46c3.396 0 6.274-2.489 6.752-5.845l12.508-87.596 14.874 148.683c.355 3.437 3.205 6.056 6.643 6.138h.143c3.39 0 6.274-2.489 6.752-5.845l14.227-99.599 6.397 38.362c.546 3.287 3.396 5.702 6.725 5.702h88.66c3.771 0 6.82-3.049 6.82-6.82-.001-3.772-3.05-6.821-6.821-6.821z" /></svg>
      </div>
    </div>
  </div>
  <!-- End Preloader -->
  <!-- Start Header Section -->
  <header class="cs_site_header cs_style_1 cs_sticky_header cs_heading_font cs_heading_color">
    <div class="cs_main_header">
      <div class="container-fluid">
        <div class="cs_main_header_in">
          <div class="cs_main_header_left">
            <a class="cs_site_branding" href="{{ url('/') }}">
              <img src="{{ asset('assets/img/logo_black.svg') }}" alt="Logo">
            </a>
            <div class="cs_nav cs_fs_18 cs_semibold">
              <div class="cs_nav_list_wrap">
                <ul class="cs_nav_list">
                  <li class="menu-item-has-children cs_mega_menu">
                    <a href="{{ url('/') }}">Home</a>
                    <ul class="cs_mega_wrapper cs_with_thumb">
                      <li>
                        <a href="{{ url('/') }}">
                          <img src="{{ asset('assets/img/demo/1_main-home.jpg') }}" alt="">Main Home
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('dental') }}">
                          <img src="{{ asset('assets/img/demo/2_dental.jpg') }}" alt="">Dental
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('eye-care') }}">
                          <img src="{{ asset('assets/img/demo/3_eye-care.jpg') }}" alt="">Eye Care
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('rehabilitations') }}">
                          <img src="{{ asset('assets/img/demo/4_rehabilatations-center.jpg') }}" alt="">Rehabilatations Center
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('physiotherapy') }}">
                          <img src="{{ asset('assets/img/demo/5_physiotherepy_center.jpg') }}" alt="">Physiotherepy Center
                        </a>
                      </li>
                      <li>
                        <a href="{{ route('psychology') }}">
                          <img src="{{ asset('assets/img/demo/6_psychology.jpg') }}" alt="">Psychology
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{ route('doctors') }}">Doctors</a>
                    <ul>
                      <li><a href="{{ route('doctors') }}">Find Doctors</a></li>
                      <li><a href="{{ route('doctor-details') }}">Doctor Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('about') }}">About Us</a></li>
                  <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul>
                      <li><a href="{{ route('appointment') }}">Appointment</a></li>
                      <li><a href="{{ route('department') }}">Our Departments</a></li>
                      <li><a href="{{ route('department-details') }}">Department Details</a></li>
                      <li><a href="{{ route('case-studies') }}">Case Studies</a></li>
                      <li><a href="{{ route('case-studies-details') }}">Case Studies Details</a></li>
                      <li><a href="{{ route('services') }}">Services</a></li>
                      <li><a href="{{ route('service-details') }}">Service Details</a></li>
                      <li><a href="{{ route('pricing-plan') }}">Pricing Plan</a></li>
                      <li><a href="{{ route('gallery') }}">Gallery</a></li>
                      <li><a href="{{ route('working-process') }}">Working progress</a></li>
                      <li><a href="{{ route('before-after') }}">Before After</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{ route('products') }}">Shop</a>
                    <ul>
                      <li><a href="{{ route('shop') }}">Shop</a></li>
                      <li><a href="{{ route('shop-details') }}">Shop Details</a></li>
                      <li><a href="{{ route('cart') }}">Cart</a></li>
                      <li><a href="{{ route('checkout') }}">Checkout</a></li>
                    </ul>
                  </li>
                  <li class="menu-item-has-children">
                    <a href="{{ route('blog') }}">Blog</a>
                    <ul>
                      <li><a href="{{ route('blog') }}">Blog</a></li>
                      <li><a href="{{ route('blog-with-sidebar') }}">Blog With Sidebar</a></li>
                      <li><a href="{{ route('blog-details') }}">Blog Details</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="cs_main_header_right">
            <div class="cs_header_social_links">
              <a href="#" class="cs_center">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-pinterest-p"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Section -->
