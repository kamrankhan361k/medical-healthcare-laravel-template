@extends('layouts.app')
@section('content')
 <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Contact Us</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Contact Us</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Contact Section -->
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row cs_gap_y_40">
      <div class="col-lg-6">
        <div class="contact_form_wrapper cs_heading_font cs_bg_filed cs_hide_before_after" data-src="assets/img/contact_form_bg_1.png">
          <div class="cs_section_heading cs_style_1">
            <h2 class="cs_section_title cs_fs_40 mb-0">Contact With Us</h2>
            <div class="cs_height_20 cs_height_lg_20"></div>
            <div>Send us a message and we' ll respond as soon as possible</div>
          </div>
          <div class="cs_height_45 cs_height_lg_40"></div>
          <form class="row cs_row_gap_30 cs_gap_y_30">
            <div class="col-sm-6">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_5">
                <input type="text" name="fname" class="cs_form_field cs_type_1" placeholder="First Name*">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_5">
                <input type="text" name="lname" class="cs_form_field cs_type_1" placeholder="LastName*">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_5">
                <input type="email" name="email" class="cs_form_field cs_type_1" placeholder="Email Address*">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_5">
                <input type="text" name="phone" class="cs_form_field cs_type_1" placeholder="Phone Number*">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_5">
                <input type="text" name="subject" class="cs_form_field cs_type_1" placeholder="Subject*">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="cs_form_field_wrapper cs_type_1 cs_radius_5">
               <textarea name="message" rows="5" placeholder="Your Message here" class="cs_form_field cs_type_1"></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_5 w-100">
                <span class="cs_btn_text">Send Message</span>
                <span class="cs_btn_text"><i class="fa-solid fa-arrow-right"></i></span>
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row cs_gap_y_24">
          <div class="col-lg-12">
            <div class="contact_form_wrapper cs_heading_font cs_type_1 cs_radius_5 position-relative">
              <div class="cs_section_heading cs_style_1">
                <h2 class="cs_section_title cs_fs_40 mb-0">Need Any Help?</h2>
                <div class="cs_height_20 cs_height_lg_20"></div>
                <div>Call us or message and we' ll respond as soon as possible</div>
              </div>
              <div class="cs_height_45 cs_height_lg_40"></div>
              <div class="row cs_gap_y_30">
                <div class="col-md-4">
                 <div class="cs_iconbox cs_style_11">
                  <div class="cs_iconbox_icon cs_center cs_radius_50 cs_accent_bg cs_white_color"><i class="fa-solid fa-phone"></i></div>
                  <a href="tel:+(323)98473847383" class="cs_iconbox_text">+(323) 9847 3847 383</a>
                  <a href="tel:+(434)54665467443" class="cs_iconbox_text">+(434) 5466 5467 443</a>
                 </div>
                </div>
                <div class="col-md-4">
                 <div class="cs_iconbox cs_style_11">
                  <div class="cs_iconbox_icon cs_center cs_radius_50 cs_accent_bg cs_white_color">
                    <i class="fa-regular fa-envelope"></i>
                  </div>
                  <a href="mailto:infoyour@gmail.com" class="cs_iconbox_text">infoyour@gmail.com</a>
                  <a href="mailto:domaininfo@gmail.com" class="cs_iconbox_text">domaininfo@gmail.com</a>
                 </div>
                </div>
                <div class="col-md-4">
                 <div class="cs_iconbox cs_style_11">
                  <div class="cs_iconbox_icon cs_center cs_radius_50 cs_accent_bg cs_white_color">
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                  <p class="cs_iconbox_text mb-0">4517 Washington Ave. 32 Manchester, Road USA</p>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="cs_location_map cs_radius_5">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9927.397014423128!2d-0.11606041997657368!3d51.53432469680956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b6eadb3896d%3A0x5aa8ffed63aea5ac!2sIslington%2C%20London%2C%20UK!5e0!3m2!1sen!2sbd!4v1726660581556!5m2!1sen!2sbd"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
   <!-- Start Contact Section -->
@endsection
