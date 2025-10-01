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
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Appointment</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Appointment</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
<!-- Start Appointment Section -->
<section>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row cs_gap_y_40">
      <div class="col-lg-6">
        <div class="cs_section_heading cs_style_1">
          <p class="cs_section_subtitle cs_accent_color">Appointment</p>
          <h2 class="cs_section_title cs_fs_48 mb-0">Get Amazing Treatment For our Specialist Doctors
          </h2>
        </div>
        <div class="cs_height_50 cs_height_lg_40"></div>
        <div class="row cs_gap_y_40">
          <div class="col-12">
            <div class="cs_iconbox cs_style_3 cs_type_1">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/security_icon.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_text">
                <h3 class="cs_iconbox_title cs_fs_32">100% Safe and Trusted</h3>
                <p class="cs_iconbox_subtitle mb-0">Far far away, behind the word bore et dolore magna
                  aliqua. Ut enim ad on minim veniam, quis nostrud</p>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="cs_iconbox cs_style_3 cs_type_1">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/surgery_icon.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_text">
                <h3 class="cs_iconbox_title cs_fs_32">Specialist eye Surgery</h3>
                <p class="cs_iconbox_subtitle mb-0">Far far away, behind the word bore et dolore magna
                  aliqua. Ut enim ad on minim veniam, quis nostrud</p>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="cs_iconbox cs_style_3 cs_type_1">
              <div class="cs_iconbox_icon cs_center">
                <img src="assets/img/icons/support_icon.svg" alt="Icon">
              </div>
              <div class="cs_iconbox_text">
                <h3 class="cs_iconbox_title cs_fs_32">24/7 Take care Staff</h3>
                <p class="cs_iconbox_subtitle mb-0">Far far away, behind the word bore et dolore magna
                  aliqua. Ut enim ad on minim veniam, quis nostrud</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="cs_appointment_form_wrapper cs_type_3 cs_radius_10">
          <h3 class="cs_appointment_heading cs_white_color">Make an Appointment</h3>
          <form class="cs_appointment_form row cs_gap_y_30">
            <div class="col-md-6">
              <div class="cs_form_field_wrapper cs_radius_10">
                <input type="text" name="name" class="cs_form_field cs_fs_14" placeholder="Your Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="cs_form_field_wrapper cs_radius_10">
                <input type="text" name="phone" class="cs_form_field cs_fs_14" placeholder="Phone Number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="cs_form_field_wrapper cs_radius_8">
                <select name="department" class="cs_form_field_wrapper cs_radius_8 cs_select"
                  data-placeholder="Select Department">
                  <option value="dental">Dental</option>
                  <option value="pediatric">Pediatric</option>
                  <option value="gynecology">Gynecology</option>
                  <option value="cardiology">Cardiology</option>
                  <option value="neurology">Neurology</option>
                  <option value="psychiatry">Psychiatry</option>
                  <option value="others">Others</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="cs_form_field_wrapper cs_radius_10">
                <input type="text" name="date" class="cs_form_field" id="datepicker" placeholder="DD MM  YY">
                <span class="cs_input_icon position-absolute"><i class="fa-regular fa-calendar-days"></i></span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="cs_form_field_wrapper cs_radius_10">
                <textarea name="Message" rows="6" class="cs_form_field cs_fs_14"
                  placeholder="Write Message"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_white_bg cs_radius_100">
                <span class="cs_btn_text">Book An Appointment</span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End Appointment Section -->
 <!-- Start Team Section -->
 <section class="cs_slider cs_style_1 cs_slider_gap_30 cs_accent_bg">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1">
      <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_white_color cs_heading_font">Team Members</p>
      <h2 class="cs_section_title cs_fs_48 cs_white_color mb-0">We are the Professional <br>Specialist Doctor’s</h2>
    </div>
    <div class="cs_height_50 cs_height_lg_40"></div>
    <div class="cs_full_screen_right cs_variable_width_wrap cs_ptb_12">
      <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="700" data-center="0"
        data-variable-width="1" data-slides-per-view="1">
        <div class="cs_slider_wrapper">
          <div class="cs_slide">
            <div class="cs_team cs_style_1">
              <div class="cs_team_thumbnail cs_center">
                <img src="assets/img/team_1.jpeg" alt="Team Thumbnail">
                <div class="cs_social_btns cs_style_1 position-absolute">
                  <a href="#" class="cs_center cs_radius_8 cs_share"><i class="fa-solid fa-plus"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="cs_team_bio cs_white_bg">
                <h3 class="cs_team_title cs_fs_20 cs_medium cs_accent_color"><a href="doctor-details.html">Dr. Rosie
                    Forced Bin</a></h3>
                <p class="cs_team_subtitle mb-0">Associate Eye Specialist</p>
              </div>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_team cs_style_1">
              <div class="cs_team_thumbnail cs_center">
                <img src="assets/img/team_2.jpeg" alt="Team Thumbnail">
                <div class="cs_social_btns cs_style_1 position-absolute">
                  <a href="#" class="cs_center cs_radius_8 cs_share"><i class="fa-solid fa-plus"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="cs_team_bio cs_white_bg">
                <h3 class="cs_team_title cs_fs_20 cs_medium cs_accent_color"><a href="doctor-details.html">Dr. Tom
                    Handers</a></h3>
                <p class="cs_team_subtitle mb-0">Head Of Surgery Department</p>
              </div>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_team cs_style_1">
              <div class="cs_team_thumbnail cs_center">
                <img src="assets/img/team_3.jpeg" alt="Team Thumbnail">
                <div class="cs_social_btns cs_style_1 position-absolute">
                  <a href="#" class="cs_center cs_radius_8 cs_share"><i class="fa-solid fa-plus"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="cs_team_bio cs_white_bg">
                <h3 class="cs_team_title cs_fs_20 cs_medium cs_accent_color"><a href="doctor-details.html">Dr. Rosie
                    Forced Bin</a></h3>
                <p class="cs_team_subtitle mb-0">Associate Eye Specialist</p>
              </div>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_team cs_style_1">
              <div class="cs_team_thumbnail cs_center">
                <img src="assets/img/team_4.jpeg" alt="Team Thumbnail">
                <div class="cs_social_btns cs_style_1 position-absolute">
                  <a href="#" class="cs_center cs_radius_8 cs_share"><i class="fa-solid fa-plus"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="cs_team_bio cs_white_bg">
                <h3 class="cs_team_title cs_fs_20 cs_medium cs_accent_color"><a href="doctor-details.html">Dr. Nicola
                    Veeck</a></h3>
                <p class="cs_team_subtitle mb-0">Medicine Specialist</p>
              </div>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_team cs_style_1">
              <div class="cs_team_thumbnail cs_center">
                <img src="assets/img/team_5.jpeg" alt="Team Thumbnail">
                <div class="cs_social_btns cs_style_1 position-absolute">
                  <a href="#" class="cs_center cs_radius_8 cs_share"><i class="fa-solid fa-plus"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="cs_team_bio cs_white_bg">
                <h3 class="cs_team_title cs_fs_20 cs_medium cs_accent_color"><a href="doctor-details.html">Dr. Stevin
                    K Beate</a></h3>
                <p class="cs_team_subtitle mb-0">Senior Eye Specialist</p>
              </div>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_team cs_style_1">
              <div class="cs_team_thumbnail cs_center">
                <img src="assets/img/team_6.jpeg" alt="Team Thumbnail">
                <div class="cs_social_btns cs_style_1 position-absolute">
                  <a href="#" class="cs_center cs_radius_8 cs_share"><i class="fa-solid fa-plus"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-linkedin-in"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-x-twitter"></i></a>
                  <a href="#" class="cs_center cs_radius_8"><i class="fa-brands fa-instagram"></i></a>
                </div>
              </div>
              <div class="cs_team_bio cs_white_bg">
                <h3 class="cs_team_title cs_fs_20 cs_medium cs_accent_color"><a href="doctor-details.html">Dr. Won He
                    lee Phd</a></h3>
                <p class="cs_team_subtitle mb-0">Associate Dentist</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End Team Section -->
<!-- Start Blog Section -->
<section>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_type_1">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Blog & news</p>
        <h2 class="cs_section_title cs_fs_48 mb-0">Take a Look at The Latest <br> Articles & News</h2>
      </div>
      <div class="cs_section_heading_right">
        <a href="blog.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
          <span class="cs_btn_text">See All Blogs</span>
        </a>
      </div>
    </div>
    <div class="cs_height_50 cs_height_lg_40"></div>
    <div class="row cs_row_gap_30 cs_gap_y_40">
      <div class="col-lg-4">
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail">
            <img src="assets/img/post_1.jpeg" alt="Post Thumbnail">
          </a>
          <div class="cs_post_info">
            <div class="cs_post_meta">August 04, 2024</div>
            <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Medi Tips How to Physical Fitness your
                Health</a></h3>
            <a href="blog-details.html" class="cs_text_btn cs_fs_18 cs_heading_color">
              <span>Learn More</span>
              <div class="cs_text_btn_icon cs_center">
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
              </div>
            </a>
          </div>
        </article>
      </div>
      <div class="col-lg-4">
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail">
            <img src="assets/img/post_2.jpeg" alt="Post Thumbnail">
          </a>
          <div class="cs_post_info">
            <div class="cs_post_meta">August 15, 2024</div>
            <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">How to Get Best Care 7 Step for your
                Eyes</a></h3>
            <a href="blog-details.html" class="cs_text_btn cs_fs_18 cs_heading_color">
              <span>Learn More</span>
              <div class="cs_text_btn_icon cs_center">
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
              </div>
            </a>
          </div>
        </article>
      </div>
      <div class="col-lg-4">
        <article class="cs_post cs_style_1">
          <a href="blog-details.html" class="cs_post_thumbnail">
            <img src="assets/img/post_3.jpeg" alt="Post Thumbnail">
          </a>
          <div class="cs_post_info">
            <div class="cs_post_meta">September 01, 2024</div>
            <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Improve your heart health with genetic
                testing.</a></h3>
            <a href="blog-details.html" class="cs_text_btn cs_fs_18 cs_heading_color">
              <span>Learn More</span>
              <div class="cs_text_btn_icon cs_center">
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
              </div>
            </a>
          </div>
        </article>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End Blog Section -->
 <!-- Start CTA Section -->
 <section class="cs_cta cs_style_1 mt-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="cs_cta_in">
          <div class="cs_cta_info">
            <h2 class="cs_cta_title">Meet the expert support team</h2>
            <p class="cs_cta_subtitle mb-0">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.</p>
          </div>
          <a href="contact.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
            <span class="cs_btn_text">Contact Now</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End CTA Section -->
@endsection
