@extends('layouts.app')
@section('content')
  <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Department Details</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Department Details</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Department Details  -->
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row cs_gap_y_40">
      <div class="col-lg-8">
        <div class="cs_department_details cs_heading_font">
          <div class="cs_department_details_thumbnail cs_radius_15">
            <img src="assets/img/department_details_1.jpeg" alt="Image">
          </div>
          <p>Vast numbers of employees now work remotely, and it’s too late to develop a set of remote-work policies if you didn’t already have one. But there are ways to make the remote-work experience productive and engaging for employees</p>
          <p>Use both direct conversations and indirect observations to get visibility into employees’ challenges and concerns. Use every opportunity to make clear to employees that you support and care them. To facilitate regular conversations between managers and employees, provide managers with guidance on how best to broach sensitive subjects arising from the COVID-19 pandemic, including alternative work models, job security and prospects, impact on staffing</p>
          <div class="row cs_row_gap_30 cs_gap_y_30 align-items-center">
            <div class="col-lg-6">
              <blockquote>The third Monday of January is supposed to be the most depressing day of the year. Whether you believe that or not, the long nights, cold weather, and trying to keep to new year resolutions are all probably getting to you a little by now.</blockquote>
            </div>
            <div class="col-lg-6">
              <img src="assets/img/department_details_2.jpeg" alt="Image">
            </div>
          </div>
          <p>The third Monday of January is supposed to be the most depressing day of the year. Whether you believe that or not, the long nights, cold weather, and trying to keep to new year resolutions are all probably getting to you a little by now. To make matters worse many will still be recovering from
            their Christmas spending. So how can you make today.</p>
        </div>
        <div class="cs_height_60 cs_height_lg_50"></div>
        <div class="cs_card cs_style_10 cs_radius_5 cs_gray_bg position-relative">
          <div class="cs_card_thumbnail">
            <img src="assets/img/team_7.jpeg" alt="Image">
          </div>
          <div class="cs_card_info">
            <h3 class="cs_card_title cs_fs_32 cs_semibold">Devitt Weren't</h3>
            <p class="cs_card_subtitle cs_heading_color cs_heading_font">Head oF Department</p>
            <p class="cs_card_text">The third Monday of January is supposed to be the most depressing day of the year. Whether you believe that or not, the long nights</p>
            <div class="cs_social_btns cs_style_1">
              <a href="#" class="cs_center cs_heading cs_radius_50"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" class="cs_center cs_heading cs_radius_50"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="#" class="cs_center cs_heading cs_radius_50"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="cs_center cs_heading cs_radius_50"><i class="fa-brands fa-pinterest-p"></i></a>
            </div>
          </div>
        </div>
      </div>
      <aside class="col-lg-4">
        <div class="cs_sidebar cs_style_4 cs_heading_font">
          <div class="cs_sidebar_widget cs_type_3 cs_gray_bg cs_radius_15">
            <h3 class="cs_widget_title cs_fs_20 cs_semibold cs_accent_color">Other Departments</h3>
            <hr>
            <ul class="cs_department_list cs_accent_color cs_mp0">
              <li><a href="department-details.html">Medicine Department</a></li>
              <li><a href="department-details.html">Cardiology Department</a></li>
              <li><a href="department-details.html">Neurology Department</a></li>
              <li><a href="department-details.html">Urology Department</a></li>
              <li><a href="department-details.html">Gastrologic Department</a></li>
              <li><a href="department-details.html">Dental Care Department</a></li>
            </ul>
          </div>
          <div class="cs_sidebar_widget cs_type_3 cs_gray_bg cs_radius_15">
            <h3 class="cs_widget_title cs_fs_20 cs_semibold cs_accent_color">Opening Hours</h3>
            <hr>
            <ul class="cs_schedule_list cs_accent_color cs_mp0">
              <li><span>Monday - Friday</span><span> 8.30am - 9.00 pm</span></li>
              <li><span>Saturday </span><span>10.30am - 2.30pm</span></li>
              <li><span>Sunday</span><span>Off Day</span></li>
            </ul>
            <h4 class="cs_help_title">Need Help?</h4>
            <p class="cs_widget_text">Vast numbers of employees now work remotely, and it’s too.</p>
            <a href="appointment.html" class="cs_btn cs_style_1 cs_accent_bg cs_fs_18 cs_semibold cs_radius_100"><span class="cs_btn_text">Make An Appointment</span>
            </a>
          </div>
          <div class="cs_sidebar_widget cs_type_3 cs_gray_bg cs_radius_15">
            <h3 class="cs_widget_title cs_fs_20 cs_semibold cs_accent_color">Book Appointment</h3>
            <hr>
            <form class="cs_appoinment_form">
              <div class="col-12">
                <input type="text" placeholder="Full Name" class="cs_form_field">
              </div>
              <div class="col-12">
                <input type="text" placeholder="Phone Number" class="cs_form_field">
              </div>
              <div class="col-12">
                <input type="email" placeholder="Email Address" class="cs_form_field">
              </div>
              <div class="col-12">
                <input type="text" placeholder="Appointment Date" class="cs_form_field">
              </div>
              <div class="col-12">
                <textarea name="message" rows="3" placeholder="Message" class="cs_form_field"></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="cs_btn cs_style_1 cs_accent_bg cs_fs_18 cs_semibold cs_radius_100"><span class="cs_btn_text">Make An Appointment</span>
                </button>
              </div>
            </form>
          </div>
        </div>
      </aside>
    </div>
  </div>
  <!-- End Department Details  -->
@endsection
