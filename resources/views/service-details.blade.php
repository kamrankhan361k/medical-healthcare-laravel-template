@extends('layouts.app')
@section('content')
  <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Service Details</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Service Details</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Service Details Section -->
  <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_gap_y_40">
        <div class="col-lg-8">
          <div class="cs_service_details">
            <img src="assets/img/service_details_1.jpeg" alt="Image">
            <h2>Eye care Services</h2>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in
              classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and
              1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero</p>

            <p>We prioritize products that are made from recycled or renewable materials, are energy-efficient, and have minimal environmental footprints. Our selection process involves assessing the entire lifecycle of each product to ensure it aligns with our commitment to sustainability.</p>
            <ul class="cs_list cs_style_4 cs_fs_18 cs_body_font cs_heading_color cs_semibold cs_mp0">
              <li><i class="fa-solid fa-check"></i>Minim veniam, quis nostrud ullamco laboris</li>
              <li><i class="fa-solid fa-check"></i>Lorem ipsum dolor sit amet, consectetur adipisic ipsum</li>
              <li><i class="fa-solid fa-check"></i>Duis aute irure dolor in reprehenderit in voluptate</li>
            </ul>
            <h3>Remarketing services</h3>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections</p>
            <blockquote>"Working with Medixal was an absolute delight! Their team's creativity knows no bounds. They not only understood our vision but elevated it to new heights. From branding to Psychology campaigns.”
              <small>Rellena Haque / heart patient</small>
              <img src="assets/img/icons/quote_icon_8.svg" alt="Icon">
            </blockquote>
            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through of the word in classical literature, discovered the undoubtable source.</p>
          </div>
          <div>
            <div class="cs_height_80 cs_height_lg_60"></div>
            <h3 class="cs_fs_42">Contact with us</h3>
            <form class="cs_reply_form cs_type_1 row cs_gap_y_24 cs_heading_font" id="comment">
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
                <button type="submit" class="cs_btn cs_style_1 cs_accent_bg cs_fs_18 cs_semibold cs_radius_100"><span class="cs_btn_text">Send Message</span>
                </button>
              </div>
            </form>
          </div>
        </div>
        <aside class="col-lg-4">
          <div class="cs_sidebar cs_style_2">
            <div class="cs_sidebar_widget cs_type_1 cs_heading_font text-uppercase">
              <ul class="cs_btn_list cs_mp0">
                <li><a href="service-details.html" class="cs_accent_color cs_semibold cs_radius_100">
                    Web development<i class="fa-solid fa-arrow-right"></i></a>
                </li>
                <li><a href="service-details.html" class="cs_accent_color cs_semibold cs_radius_100">
                    ui/ux design<i class="fa-solid fa-arrow-right"></i></a>
                  </li>
                <li><a href="service-details.html" class="cs_accent_color cs_semibold cs_radius_100">
                  branding design<i class="fa-solid fa-arrow-right"></i></a>
                </li>
                <li><a href="service-details.html" class="cs_accent_color cs_semibold cs_radius_100">
                  digital marketing<i class="fa-solid fa-arrow-right"></i></a>
                </li>
              </ul>
            </div>
            <div class="cs_card cs_style_9 cs_accent_bg cs_radius_20">
              <h4 class="cs_fs_24 cs_black cs_white_color">Calmer</h4>
              <h3 class="cs_fs_30 cs_medium cs_white_color">Have a Appointment in Medixal? Let’s work Go</h3>
              <p class="cs_white_color">Lorem ipsum dolor st consectetur adipisicing variations but</p>
              <a href="contact.html" class="cs_center cs_radius_50">
                <i class="fa-solid fa-arrow-right-long"></i>
                <i class="fa-solid fa-arrow-right-long"></i>
              </a>
            </div>
          </div>
        </aside>
      </div>
    </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <!-- End Service Details Section -->
@endsection
