@extends('layouts.app')
@section('content')
  <div class="cs_modal_search cs_center">
    <div class="cs_search_overlay cs_header_overlay"></div>
    <form action="#" class="cs_modal_search_form">
      <button class="cs_search_close" type="button">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M26.4233 14.7567L21.18 20L26.4233 25.2433C26.7483 25.5683 26.7483 26.0967 26.4233 26.4217C26.26 26.585 26.0467 26.665 25.8333 26.665C25.62 26.665 25.4067 26.5833 25.2433 26.4217L20 21.1783L14.7567 26.4217C14.5933 26.585 14.38 26.665 14.1667 26.665C13.9533 26.665 13.74 26.5833 13.5767 26.4217C13.2517 26.0967 13.2517 25.5683 13.5767 25.2433L18.82 20L13.5767 14.7567C13.2517 14.4317 13.2517 13.9033 13.5767 13.5783C13.9017 13.2533 14.43 13.2533 14.755 13.5783L19.9983 18.8217L25.2417 13.5783C25.5667 13.2533 26.095 13.2533 26.42 13.5783C26.745 13.9033 26.745 14.4317 26.42 14.7567H26.4233ZM40 20C40 31.0283 31.0283 40 20 40C8.97167 40 0 31.0283 0 20C0 8.97167 8.97167 0 20 0C31.0283 0 40 8.97167 40 20ZM38.3333 20C38.3333 9.89167 30.1083 1.66667 20 1.66667C9.89167 1.66667 1.66667 9.89167 1.66667 20C1.66667 30.1083 9.89167 38.3333 20 38.3333C30.1083 38.3333 38.3333 30.1083 38.3333 20Z"
            fill="currentColor" />
        </svg>
      </button>
      <input type="text" placeholder="Type to search..." class="cs_fs_32 cs_modal_search_input">
    </form>
  </div>
  <!-- End Header Section -->
  <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Doctor Details</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Doctor Details</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Doctor Details Section -->
  <section>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_team_details cs_heading_font">
        <div class="row cs_gap_y_40">
          <div class="col-lg-6">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Medicine Specialist
              </p>
              <h2 class="cs_section_title cs_fs_48 mb-0">Dr. ABM Khalid Hasan</h2>
            </div>
            <div class="cs_height_10 cs_height_lg_10"></div>
            <p class="cs_team_degree"><b>MBBS</b>(Medicine, London),<b>PhD</b>( Physical Medicine, Japan), <b>MD</b>
              (Singapore)</p>
            <p class="cs_team_status"><b>Associate Professor,</b> Medicine(California Cantrell Hospital)</p>
            <ul class="cs_team_contact_list cs_fs_20 cs_heading_color cs_mp0">
              <li><a href="mailto:abmkhalidhasandr@.com">abmkhalidhasandr@.com</a></li>
              <li><a href="tel:+441793123456">+44 1793 123 456</a></li>
            </ul>
            <div class="cs_social_btns cs_style_1">
              <a href="#" class="cs_center cs_radius_50">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="#" class="cs_center cs_radius_50">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
              <a href="#" class="cs_center cs_radius_50">
                <i class="fa-brands fa-linkedin-in"></i>
              </a>
              <a href="#" class="cs_center cs_radius_50">
                <i class="fa-brands fa-dribbble"></i>
              </a>
            </div>
            <p class="cs_team_info cs_fs_18 mb-0">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
            <div class="cs_height_60 cs_height_lg_50"></div>
            <h3 class="cs_contact_heading cs_fs_42 cs_semibold">Contact with me</h3>
            <form class="cs_reply_form cs_type_1 row cs_gap_y_24 cs_heading_font" id="contact">
              <div class="col-md-6">
                <input type="text" name="name" placeholder="Your full name" class="cs_form_field">
              </div>
              <div class="col-md-6">
                <input type="email" name="email" placeholder="Enter email address" class="cs_form_field">
              </div>
              <div class="col-md-12">
                <textarea name="message" rows="4" placeholder="Write your message" class="cs_form_field"></textarea>
              </div>
              <div class="col-md-12">
                <button type="submit" class="cs_btn cs_style_1 cs_accent_bg cs_fs_18 cs_semibold cs_radius_100"><span class="cs_btn_text">Send Message</span></button>
              </div>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="cs_team_thumbnail">
              <img src="assets/img/team_details_1.jpeg" alt="Image">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Doctor Details Section -->
@endsection
