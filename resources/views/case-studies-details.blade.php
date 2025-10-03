@extends('layouts.app')
@section('content')
 <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Case Studies Details</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Case Studies Details</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Case Study Details  -->
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row cs_row_gap_40 cs_gap_y_50">
      <div class="col-lg-8">
        <div class="cs_casestudy_details cs_heading_font">
          <div class="cs_casestudy_details_thumbnail cs_radius_15">
            <img src="assets/img/casestydy_details_1.jpeg" alt="Image">
          </div>
          <h3>Overview</h3>
          <p>A content management system helps you create, manage, and publish content on the web. It also keep content organized and accessible so it can be used and repurposed effectively. There are various kinds of content management systems available—from cloud-based to a headless</p>
          <div class="row cs_row_gap_30 cs_gap_y_30">
            <div class="col-lg-5">
              <h3>The Challenge of Operations </h3>
              <p>CMS provides user-friendly features for easy editing and is compatible with installing plugins and tools that provide even more features</p>
              <p>for advanced functions. API CMS’s are built to have an excellent user-friendly interface that is easy to use.</p>
            </div>
            <div class="col-lg-7">
              <div class="row">
                <div class="col-sm-6 cs_radius_5">
                  <img src="assets/img/casestydy_details_2.jpeg" alt="Image">
                </div>
                <div class="col-sm-6 cs_radius_5">
                  <img src="assets/img/casestydy_details_3.jpeg" alt="Image">
                </div>
              </div>
            </div>
          </div>
          <h3>Features</h3>
          <p>A content management system (CMS) is an application that is used to manage content, allowing multiple
            contributors to create, edit and publish. Content in a CMS is typically stored in a database and displayedin a presentation layer based on a set of templates like a website.</p>
          <ul>
            <li><i class="fa-solid fa-check"></i>Creating and editing content</li>
            <li><i class="fa-solid fa-check"></i>Workflows, reporting, and content organization</li>
            <li><i class="fa-solid fa-check"></i>User & role-based administration and security</li>
            <li><i class="fa-solid fa-check"></i>Flexibility, scalability, and performance and analysis</li>
            <li><i class="fa-solid fa-check"></i>Multilingual content capabilities</li>
          </ul>
          <h3>Goal</h3>
          <p>A content management system (CMS) is an application that is used to manage content, allowing multiple
            contributors to create, edit and publish. Content in a CMS is typically stored in a database and displayed in a presentation layer based on a set of templates like a website.</p>
        </div>
      </div>
      <aside class="col-lg-4">
        <div class="cs_sidebar cs_style_3 cs_heading_font">
          <div class="cs_sidebar_widget cs_type_2 cs_white_bg">
            <h3 class="cs_widget_title cs_fs_24 cs_medium">Kidney Dialysis Operations</h3>
            <hr>
            <ul class="cs_casestudy_list cs_mp0">
              <li><span>Start Date :</span><span>27 Sep 2024
                </span></li>
              <li><span>End Date :</span><span>03 Oct 2024</span></li>
              <li><span>Patient Name :</span><span>Rashina Haider</span></li>
              <li><span>Tags :</span><span>Medical Treatment</span></li>
              <li><span>Website :</span><span>medixal.com</span></li>
              <li><span>Category :</span><span>Healthcare</span></li>
            </ul>
          </div>
          <div class="cs_sidebar_widget cs_type_2 cs_white_bg">
            <h3 class="cs_widget_title cs_fs_24 cs_medium">Need Your Help?</h3>
            <hr>
            <ul class="cs_location_list cs_mp0">
              <li><a href="tel:+(323)750-1234"><span><i class="fa-solid fa-phone"></i></span>+(323) 750-1234</a></li>
              <li><a href="mailto:infoyour@albashti.com"><span><i class="fa-solid fa-envelope"></i></span>
                infoyour@albashti.com</a></li>
              <li><a href="#"><span><i class="fa-brands fa-skype"></i></span>Abubokkor AK</a></li>
              <li><span><i class="fa-solid fa-location-dot"></i></span>374 FA Tower, William S Blvd <br>
                2721, IL, USA</li>
            </ul>
          </div>
        </div>
      </aside>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <!-- End Case Study Details  -->
@endsection
