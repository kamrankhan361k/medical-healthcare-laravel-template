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
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">About Us</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">About us</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start About Section -->
  <section class="cs_about cs_style_1 cs_hide_before_after position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="row align-items-center cs_gap_y_40">
        <div class="col-lg-6">
          <div class="cs_about_thumbnail">
            <div class="cs_about_thumbnail_1">
              <img src="assets/img/about_1.jpg" alt="Image">
              <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_player_btn cs_style_1 cs_video_open">
                <span class="cs_player_btn_icon cs_center">
                  <img src="assets/img/icons/player_icon.svg" alt="Icon">
                </span>
                <span class="cs_play_btn_text cs_fs_18 cs_semibold cs_accent_color">How We Works</span>
              </a>
            </div>
            <div class="cs_about_thumbnail_2">
              <img src="assets/img/about_2.jpg" alt="About Image">
              <svg class="cs_about_thumbnail_shape_2 cs_accent_color" width="123" height="125" viewBox="0 0 123 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.3" cx="73" cy="75" r="49.5" stroke="currentColor" stroke-dasharray="4 4"/>
                <circle opacity="0.3" cx="62" cy="50" r="49.5" stroke="currentColor" stroke-dasharray="4 4"/>
                <circle opacity="0.3" cx="50" cy="72" r="49.5" stroke="currentColor" stroke-dasharray="4 4"/>
              </svg>
            </div>
            <div class="cs_experience_box cs_center cs_accent_bg cs_radius_50">
              <p class="cs_experience_box_number cs_fs_48 cs_bold cs_white_color">30+</p>
              <p class="cs_experience_box_title cs_fs_20 cs_medium cs_white_color">Experience</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="cs_about_content">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">About us</p>
              <h2 class="cs_section_title cs_fs_48 mb-0">Advanced technology and <span
                  class="cs_accent_color">Specialist Doctors.</span></h2>
            </div>
            <p class="cs_about_text">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Wiusmod tempor incididunt incididunt ut labore et dolore magna.</p>
            <ul class="cs_list cs_style_1 cs_mp0">
              <li>
                <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                  <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                  <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
                </svg>
                Top quality Technician team
              </li>
              <li>
                <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                  <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                  <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
                </svg>
                World Class Reputed Hospital
              </li>
              <li>
                <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                  <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                  <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
                </svg>
                Discount on all Pathology & Radiology treatment
              </li>
            </ul>
            <a href="about.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100"><span
                class="cs_btn_text">Info More About</span></a>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_about_shape_1">
      <img src="assets/img/about_shape_1.svg" alt="Shape Image">
    </div>
    <div class="cs_about_shape_2">
      <img src="assets/img/about_shape_1.svg" alt="Shape Image">
    </div>
    <div class="cs_about_shape_3">
      <img src="assets/img/about_shape_1.svg" alt="Shape Image">
    </div>
    <div class="cs_about_shape_4">
      <img src="assets/img/about_shape_1.svg" alt="Shape Image">
    </div>
    <div class="cs_about_shape_13 cs_radius_50"></div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End About Section -->
  <!-- Start Casestudy Section -->
  <section class="cs_casestudy cs_style_1 position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_type_1">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Completed Case Studies</p>
          <h2 class="cs_section_title cs_fs_48 mb-0">Transform Our Latest Success <span class="cs_accent_color">Case studies</span>
          </h2>
        </div>
        <div class="cs_section_heading_right mb-0">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</div>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="cs_slider cs_style_1 cs_slider_gap_30">
        <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
          data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2"
          data-md-slides="2" data-lg-slides="3" data-add-slides="3">
          <div class="cs_slider_wrapper">
            <div class="cs_slide">
              <div class="cs_card cs_style_1 cs_radius_10">
                <a href="case-studies-details.html" class="cs_card_thumbnail cs_radius_10">
                  <img src="assets/img/casestydy_1.jpeg" alt="Card Thumbnail">
                </a>
                <div class="cs_card_bio">
                  <p class="cs_card_subtitle cs_fs_14 cs_heading_color">Personal Consulting</p>
                  <h3 class="cs_card_title cs_fs_24 cs_bold">
                    <a href="case-studies-details.html">Supports Patients</a>
                  </h3>
                  <a href="case-studies-details.html" class="cs_card_btn">
                    <span>Learn More</span>
                    <div class="cs_card_btn_icon cs_center">
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                  </a>
                  <hr>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_card cs_style_1 cs_radius_10">
                <a href="case-studies-details.html" class="cs_card_thumbnail cs_radius_10">
                  <img src="assets/img/casestydy_2.jpeg" alt="Card Thumbnail">
                </a>
                <div class="cs_card_bio">
                  <p class="cs_card_subtitle cs_fs_14 cs_heading_color">Gynology Operation</p>
                  <h3 class="cs_card_title cs_fs_24 cs_bold">
                    <a href="case-studies-details.html">Two Baby cesar opr.</a>
                  </h3>
                  <a href="case-studies-details.html" class="cs_card_btn">
                    <span>Learn More</span>
                    <div class="cs_card_btn_icon cs_center">
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                  </a>
                  <hr>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_card cs_style_1 cs_radius_10">
                <a href="case-studies-details.html" class="cs_card_thumbnail cs_radius_10">
                  <img src="assets/img/casestydy_3.jpeg" alt="Card Thumbnail">
                </a>
                <div class="cs_card_bio">
                  <p class="cs_card_subtitle cs_fs_14 cs_heading_color">Heart Department</p>
                  <h3 class="cs_card_title cs_fs_24 cs_bold">
                    <a href="case-studies-details.html">Heart Surgery</a></h3>
                  <a href="case-studies-details.html" class="cs_card_btn">
                    <span>Learn More</span>
                    <div class="cs_card_btn_icon cs_center">
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                  </a>
                  <hr>
                </div>
              </div>
            </div>
            <div class="cs_slide">
              <div class="cs_card cs_style_1 cs_radius_10">
                <a href="case-studies-details.html" class="cs_card_thumbnail cs_radius_10">
                  <img src="assets/img/casestydy_4.jpeg" alt="Card Thumbnail">
                </a>
                <div class="cs_card_bio">
                  <p class="cs_card_subtitle cs_fs_14 cs_heading_color">Eye Care</p>
                  <h3 class="cs_card_title cs_fs_24 cs_bold">
                    <a href="case-studies-details.html">Eye Care Services</a>
                  </h3>
                  <a href="case-studies-details.html" class="cs_card_btn">
                    <span>Learn More</span>
                    <div class="cs_card_btn_icon cs_center">
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                  </a>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_height_50 cs_height_lg_40"></div>
        <div class="cs_pagination cs_style_1"></div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Casestudy Section -->
  <!-- Start Pricing Section -->
  <section class="cs_pricing_section cs_hide_before_after">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_text_center">
        <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Pricing plan</p>
        <h2 class="cs_section_title cs_fs_48 mb-0">pricing plan to your Medical <br>Health Sevices</h2>
      </div>
      <div class="cs_height_32 cs_height_lg_30"></div>
      <div class="cs_tabs cs_style_1">
        <ul class="cs_tab_links cs_pricing_control cs_center cs_mp0">
          <li class="active"><a href="#cs_monthly">Monthly</a><span class="cs_switch"></span></li>
          <li><a href="#cs_yearly">Yearly</a></li>
        </ul>
        <div class="cs_height_32 cs_height_lg_30"></div>
        <div class="cs_tab_body">
          <div class="cs_tab active" id="cs_monthly">
            <div class="row cs_row_gap_30 cs_gap_y_30">
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_3 cs_radius_10">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Premium plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_heading_bg cs_radius_50 cs_white_color">
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                  </div>
                  <div class="cs_pricing_plan">
                    <h3 class="cs_price_value"><sup>$</sup><span class="cs_fs_64">199</span><sub>USD</sub></h3>
                  </div>
                  <div class="cs_pricing_feature">
                    <h3 class="cs_pricing_feature_title cs_fs_32">What’s Included :</h3>
                    <ul class="cs_pricing_feature_list cs_mp0">
                      <li><i class="fa-solid fa-check"></i>Medical Check up</li>
                      <li><i class="fa-solid fa-check"></i>Pathology Test Service</li>
                      <li><i class="fa-solid fa-check"></i>X-ray , Endoscopy Test Include</li>
                      <li><i class="fa-solid fa-check"></i> Home Care Of 07 Days</li>
                    </ul>
                    <a href="contact.html"
                      class="cs_pricing_btn cs_white_bg cs_accent_color cs_semibold cs_hover_up cs_radius_100">Choose
                      This Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_3 cs_radius_10 active">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Basic plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_heading_bg cs_radius_50 cs_white_color">
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                  </div>
                  <div class="cs_pricing_plan">
                    <h3 class="cs_price_value"><sup>$</sup><span class="cs_fs_64">149</span><sub>USD</sub></h3>
                  </div>
                  <div class="cs_pricing_feature">
                    <h3 class="cs_pricing_feature_title cs_fs_32">What’s Included :</h3>
                    <ul class="cs_pricing_feature_list cs_mp0">
                      <li><i class="fa-solid fa-check"></i>Medical Check up</li>
                      <li><i class="fa-solid fa-check"></i>Pathology Test Service</li>
                      <li><i class="fa-solid fa-check"></i>X-ray , Endoscopy Test Include</li>
                      <li><i class="fa-solid fa-check"></i> Home Care Of 07 Days</li>
                    </ul>
                    <a href="contact.html"
                      class="cs_pricing_btn cs_white_bg cs_accent_color cs_semibold cs_hover_up cs_radius_100">Choose
                      This Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_3 cs_radius_10">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Popular Plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_heading_bg cs_radius_50 cs_white_color">
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                  </div>
                  <div class="cs_pricing_plan">
                    <h3 class="cs_price_value"><sup>$</sup><span class="cs_fs_64">125</span><sub>USD</sub></h3>
                  </div>
                  <div class="cs_pricing_feature">
                    <h3 class="cs_pricing_feature_title cs_fs_32">What’s Included :</h3>
                    <ul class="cs_pricing_feature_list cs_mp0">
                      <li><i class="fa-solid fa-check"></i>Medical Check up</li>
                      <li><i class="fa-solid fa-check"></i>Pathology Test Service</li>
                      <li><i class="fa-solid fa-check"></i>X-ray , Endoscopy Test Include</li>
                      <li><i class="fa-solid fa-check"></i> Home Care Of 07 Days</li>
                    </ul>
                    <a href="contact.html"
                      class="cs_pricing_btn cs_white_bg cs_accent_color cs_semibold cs_hover_up cs_radius_100">Choose
                      This Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cs_tab" id="cs_yearly">
            <div class="row cs_row_gap_30 cs_gap_y_30">
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_3 cs_radius_10">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Premium plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_heading_bg cs_radius_50 cs_white_color">
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                  </div>
                  <div class="cs_pricing_plan">
                    <h3 class="cs_price_value"><sup>$</sup><span class="cs_fs_64">599</span><sub>USD</sub></h3>
                  </div>
                  <div class="cs_pricing_feature">
                    <h3 class="cs_pricing_feature_title cs_fs_32">What’s Included :</h3>
                    <ul class="cs_pricing_feature_list cs_mp0">
                      <li><i class="fa-solid fa-check"></i>Medical Check up</li>
                      <li><i class="fa-solid fa-check"></i>Pathology Test Service</li>
                      <li><i class="fa-solid fa-check"></i>X-ray , Endoscopy Test Include</li>
                      <li><i class="fa-solid fa-check"></i> Home Care Of 07 Days</li>
                    </ul>
                    <a href="contact.html"
                      class="cs_pricing_btn cs_white_bg cs_accent_color cs_semibold cs_hover_up cs_radius_100">Choose
                      This Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_3 cs_radius_10 active">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Basic plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_heading_bg cs_radius_50 cs_white_color">
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                  </div>
                  <div class="cs_pricing_plan">
                    <h3 class="cs_price_value"><sup>$</sup><span class="cs_fs_64">349</span><sub>USD</sub></h3>
                  </div>
                  <div class="cs_pricing_feature">
                    <h3 class="cs_pricing_feature_title cs_fs_32">What’s Included :</h3>
                    <ul class="cs_pricing_feature_list cs_mp0">
                      <li><i class="fa-solid fa-check"></i>Medical Check up</li>
                      <li><i class="fa-solid fa-check"></i>Pathology Test Service</li>
                      <li><i class="fa-solid fa-check"></i>X-ray , Endoscopy Test Include</li>
                      <li><i class="fa-solid fa-check"></i> Home Care Of 07 Days</li>
                    </ul>
                    <a href="contact.html"
                      class="cs_pricing_btn cs_white_bg cs_accent_color cs_semibold cs_hover_up cs_radius_100">Choose
                      This Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_3 cs_radius_10">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Popular Plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_heading_bg cs_radius_50 cs_white_color">
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                      <span><i class="fa-solid fa-arrow-right"></i></span>
                    </a>
                  </div>
                  <div class="cs_pricing_plan">
                    <h3 class="cs_price_value"><sup>$</sup><span class="cs_fs_64">325</span><sub>USD</sub></h3>
                  </div>
                  <div class="cs_pricing_feature">
                    <h3 class="cs_pricing_feature_title cs_fs_32">What’s Included :</h3>
                    <ul class="cs_pricing_feature_list cs_mp0">
                      <li><i class="fa-solid fa-check"></i>Medical Check up</li>
                      <li><i class="fa-solid fa-check"></i>Pathology Test Service</li>
                      <li><i class="fa-solid fa-check"></i>X-ray , Endoscopy Test Include</li>
                      <li><i class="fa-solid fa-check"></i> Home Care Of 07 Days</li>
                    </ul>
                    <a href="contact.html"
                      class="cs_pricing_btn cs_white_bg cs_accent_color cs_semibold cs_hover_up cs_radius_100">Choose
                      This Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_150 cs_height_lg_80"></div>
  </section>
  <!-- End Pricing Section -->
  <!-- Start Appointment Section -->
  <section class="cs_accent_bg">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_gap_y_40">
        <div class="col-lg-6">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_white_color">Appointment</p>
            <h2 class="cs_section_title cs_fs_48 cs_white_color mb-0">Get Amazing Treatment For our Specialist Doctors
            </h2>
          </div>
          <div class="cs_height_50 cs_height_lg_40"></div>
          <div class="row cs_gap_y_40">
            <div class="col-12">
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/icons/security_icon.svg" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title cs_fs_32 cs_white_color">100% Safe and Trusted</h3>
                  <p class="cs_iconbox_subtitle cs_white_color mb-0">Far far away, behind the word bore et dolore magna aliqua. Ut enim ad on minim veniam, quis nostrud</p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/icons/surgery_icon.svg" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title cs_fs_32 cs_white_color">Specialist eye Surgery</h3>
                  <p class="cs_iconbox_subtitle cs_white_color mb-0">Far far away, behind the word bore et dolore magna aliqua. Ut enim ad on minim veniam, quis nostrud</p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="cs_iconbox cs_style_3">
                <div class="cs_iconbox_icon cs_center">
                  <img src="assets/img/icons/support_icon.svg" alt="Icon">
                </div>
                <div class="cs_iconbox_text">
                  <h3 class="cs_iconbox_title cs_fs_32 cs_white_color">24/7 Take care Staff</h3>
                  <p class="cs_iconbox_subtitle cs_white_color mb-0">Far far away, behind the word bore et dolore magna aliqua. Ut enim ad on minim veniam, quis nostrud</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="cs_appointment_form_wrapper cs_type_1 cs_radius_10">
            <h3 class="cs_appointment_heading">Make an Appointment</h3>
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
                <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
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
              <h3 class="cs_post_title cs_fs_32">
                <a href="blog-details.html">Medi Tips How to Physical Fitness your Health</a>
              </h3>
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
              <h3 class="cs_post_title cs_fs_32">
                <a href="blog-details.html">How to Get Best Care 7 Step for your Eyes</a>
                </h3>
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
              <h3 class="cs_post_title cs_fs_32">
                <a href="blog-details.html">Improve your heart health with genetic testing.</a>
                </h3>
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
@endsection
