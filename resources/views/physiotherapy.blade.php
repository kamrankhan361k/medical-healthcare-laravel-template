@extends('layouts.app')
@section('content')
  <!-- Start Hero Section -->
  <section class="cs_hero cs_style_1 cs_type_3 position-relative">
    <div class="cs_hero_overlay position-absolute"></div>
    <div class="container">
      <div class="cs_hero_thumbnail cs_accent_bg">
        <img src="assets/img/hero_img_2.png" alt="Image" class="wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.35s">
      </div>
      <div class="cs_hero_content wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.25s">
        <h1 class="cs_hero_title cs_fs_100">Let’s Start A Live
          <b class="cs_hero_text_img_wrapper">
            <img src="assets/img/text_img_1.png" alt="Image">
            <a href="about.html" class="cs_arrow_btn cs_center cs_radius_50 cs_accent_bg">
              <img src="assets/img/icons/arrow_up.svg" alt="Arrow">
            </a>A Life
          </b>
          Without Any Pain
        </h1>
        <div class="cs_hero_btn_group cs_type_1">
          <p class="cs_hero_subtitle cs_fs_20 cs_medium cs_accent_color mb-0">Protect your smile and keep it healthy,
            with the latest technology available in your neighbourhood Painless Therapy Systems.</p>
          <a href="appointment.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg ">
            <span class="cs_btn_text">Book A Schedule</span>
          </a>
        </div>
      </div>
    </div>
    <a href="#about" class="cs_scroll_more_btn cs_fs_20 cs_accent_color cs_medium position-absolute">
      <span class="cs_scroll_more_btn_in">
        <i class="fa-solid fa-arrow-left-long"></i> Scroll for more
      </span>
    </a>
    <div class="cs_hero_shape_3 cs_radius_50 position-absolute"></div>
    <div class="cs_hero_shape_4 cs_radius_50 position-absolute"></div>
    <div class="cs_hero_shape_5 cs_radius_50 position-absolute"></div>
    <div class="cs_hero_shape_6 position-absolute">
      <img src="assets/img/hero_shape_2.svg" alt="Shape">
    </div>
    <div class="cs_hero_shape_7 position-absolute">
      <img src="assets/img/hero_shape_3.svg" alt="Shape">
    </div>
  </section>
  <!-- End Hero Section -->
  <!-- Start About Section -->
  <section class="cs_about cs_style_1 cs_type_3 cs_hide_before_after position-relative" id="about">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="row align-items-center cs_gap_y_40">
        <div class="col-lg-5">
          <div class="cs_about_thumbnail m-0">
            <div class="cs_about_thumbnail_1 cs_hide_before_after">
              <img src="assets/img/about_7.jpeg" alt="Image">
              <div class="cs_rectangle_shape position-absolute"></div>
            </div>
            <div class="cs_videobox cs_center cs_bg_filed position-absolute" data-src="assets/img/video_bg_7.jpeg">
              <a href="https://www.youtube.com/embed/rRid6GCJtgc"
                class="cs_player_btn cs_style_2 cs_center cs_video_open">
                <span></span>
              </a>
            </div>
            <div class="cs_experience_box cs_vertical cs_center cs_accent_bg">
              <h3 class="cs_experience_box_number cs_fs_20 cs_medium cs_white_color mb-0">24 Years Experiences</h3>
            </div>
          </div>
        </div>
        <div class="col-lg-6 offset-lg-1 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <div class="cs_about_content">
            <div class="cs_section_heading cs_style_1">
              <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">About us</p>
              <h2 class="cs_section_title cs_fs_48 mb-0">Let’s Health Restore, relax & Reliance your Body </h2>
            </div>
            <p class="cs_about_text cs_heading_color">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. Wiusmod tempor incididunt incididunt ut labore
              et dolore magna.</p>
            <ul class="cs_list cs_style_2 cs_mp0">
              <li>
                <div class="cs_progress_head cs_fs_20 cs_semibold cs_heading_color">
                  <span>Physical therapy</span>
                </div>
                <div class="cs_progress" data-progress="85">
                  <div class="cs_progress_in">
                    <span class="cs_fs_20 cs_semibold cs_heading_color">85%</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="cs_progress_head cs_fs_20 cs_semibold cs_heading_color">
                  <span>Chiroptic therapy</span>
                </div>
                <div class="cs_progress" data-progress="80">
                  <div class="cs_progress_in">
                    <span class="cs_fs_20 cs_semibold cs_heading_color">80%</span>
                  </div>
                </div>
              </li>
              <li>
                <div class="cs_progress_head cs_fs_20 cs_semibold cs_heading_color">
                  <span>Flexible & Cost Effective</span>
                </div>
                <div class="cs_progress" data-progress="70">
                  <div class="cs_progress_in">
                    <span class="cs_fs_20 cs_semibold cs_heading_color">70%</span>
                  </div>
                </div>
              </li>
            </ul>
            <a href="about.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg ">
              <span class="cs_btn_text">Info More About</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_about_shape_10 position-absolute cs_accent_color">
      <svg width="99" height="147" viewBox="0 0 99 147" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M27.8701 66.6197C28.6869 67.4359 29.7573 67.844 30.8271 67.844C31.897 67.844 32.9674 67.4359 33.7842 66.6197C35.4171 64.9862 35.4171 62.3391 33.7842 60.7062L-25.6977 1.22429C-27.3312 -0.408097 -29.9783 -0.408097 -31.6112 1.22429C-33.2442 2.8578 -33.2442 5.50486 -31.6112 7.1378L27.8701 66.6197Z" fill="currentColor"/>
        <path d="M34.8928 104.789C39.7303 109.627 41.7273 116.567 40.1049 122.899C38.3817 129.62 40.4127 136.783 45.4058 141.593C49.1294 145.181 53.9529 146.996 58.7871 146.996C63.1101 146.996 67.4414 145.544 70.9999 142.61C75.8887 138.579 78.4382 132.615 78.0051 126.403C84.2124 126.834 90.1671 124.293 94.198 119.414C100.417 111.89 99.9972 100.89 93.2223 93.8307C88.4004 88.8075 81.213 86.7682 74.4643 88.5121C68.1611 90.1389 61.239 88.138 56.3915 83.2904L45.5775 72.4764C43.944 70.844 41.2969 70.844 39.664 72.4764C38.031 74.1099 38.031 76.757 39.664 78.3899L50.478 89.2039C57.4101 96.1355 67.404 98.9726 76.555 96.6088C80.4397 95.6058 84.4153 96.732 87.1884 99.621C90.9599 103.551 91.2069 109.905 87.7515 114.086C85.2599 117.101 81.4761 118.544 77.6332 117.954C75.4121 117.609 73.1425 118.358 71.5513 119.95C69.9596 121.541 69.2137 123.814 69.556 126.029C70.1503 129.879 68.7013 133.665 65.6796 136.157C61.4905 139.611 55.1338 139.354 51.2083 135.57C48.3366 132.803 47.2138 128.843 48.2056 124.974C50.5583 115.793 47.7233 105.793 40.8069 98.8751L-50.8618 7.20867C-52.4953 5.57628 -55.1423 5.57628 -56.7753 7.20867C-58.4082 8.84217 -58.4082 11.4892 -56.7753 13.1222L34.8928 104.789Z" fill="currentColor"/>
      </svg>
    </div>
    <div class="cs_about_shape_11 position-absolute cs_accent_color">
      <svg width="85" height="139" viewBox="0 0 85 139" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M28.5455 3.53107C23.6785 0.0273678 17.4148 -0.770009 11.7894 1.39697C6.25319 3.5296 2.21312 8.23329 0.982025 13.9886L0.907421 14.3527C0.191923 17.942 0.599787 21.5903 2.08708 24.9037C12.0145 47.0236 8.57317 65.6571 3.93862 77.3932C1.61739 83.2693 3.35684 89.6126 8.37009 93.553C13.306 97.4327 19.7764 97.6216 24.8536 94.0348C26.0832 93.1654 31.378 88.2661 32.2536 87.332C33.3352 86.1789 34.7814 85.5483 36.3262 85.5528C37.7953 85.557 39.1564 86.1534 40.158 87.2313L86.3402 136.93C87.7303 138.426 90.0681 138.512 91.5631 137.123C93.0581 135.734 93.1431 133.396 91.7529 131.9L45.5708 82.2015C43.1593 79.6063 39.882 78.1715 36.343 78.1615C32.7811 78.1507 29.3266 79.6435 26.8644 82.2699C26.1227 83.0608 21.4023 87.3907 20.5857 87.9968C17.7418 90.0069 14.7686 89.1832 12.9361 87.7422C11.0415 86.2534 9.48938 83.4672 10.8146 80.1121C15.9717 67.0533 19.8136 46.3506 8.83107 21.8796C7.98921 20.0039 7.75 17.8455 8.15682 15.8041L8.21387 15.5297C8.92927 12.1827 11.2043 9.54583 14.4523 8.294C17.7413 7.02695 21.397 7.48896 24.2314 9.52902C34.8767 17.1922 40.3178 31.3789 38.0927 45.6718C37.486 49.5692 38.6687 53.4522 41.338 56.3247L102.385 122.02C103.776 123.516 106.113 123.603 107.608 122.214C109.103 120.825 109.188 118.487 107.798 116.991L46.7505 51.2946C45.6331 50.0921 45.1391 48.4591 45.3956 46.8131C48.0436 29.7956 41.4296 12.8067 28.5455 3.53107Z" fill="currentColor"/>
      </svg>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End About Section -->
  <!-- Start Service Section -->
  <section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Expertise</p>
          <h2 class="cs_section_title cs_accent_color mb-0">We offer more than Services & all Solutions Medical.</h2>
        </div>
        <div class="cs_section_heading_right cs_accent_color text-end">the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized</div>
      </div>
      <div class="cs_height_100 cs_height_lg_40"></div>
      <div class="cs_service_grid cs_style_2">
        <div class="cs_iconbox cs_style_8 cs_white_bg">
          <div class="cs_iconbox_icon cs_center cs_radius_50">
            <img src="assets/img/icons/service_icon_4.svg" alt="Icon">
          </div>
          <h3 class="cs_iconbox_title cs_fs_32 cs_semibold"><a href="service-details.html">Chiropractic Care</a></h3>
          <p class="cs_iconbox_subtitle">The other hand, we denounce with righteous Indignation and dislike men who</p>
          <a href="service-details.html" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
            <span>Get Services</span>
            <div class="cs_text_btn_icon cs_center">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </div>
          </a>
        </div>
        <div class="cs_iconbox cs_style_8 cs_white_bg">
          <div class="cs_iconbox_icon cs_center cs_radius_50">
            <img src="assets/img/icons/service_icon_5.svg" alt="Icon">
          </div>
          <h3 class="cs_iconbox_title cs_fs_32 cs_semibold"><a href="service-details.html">Acupuncture Therapy</a></h3>
          <p class="cs_iconbox_subtitle">The other hand, we denounce with righteous Indignation and dislike men who</p>
          <a href="service-details.html" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
            <span>Get Services</span>
            <div class="cs_text_btn_icon cs_center">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </div>
          </a>
        </div>
        <div class="cs_iconbox cs_style_8 cs_white_bg">
          <div class="cs_iconbox_icon cs_center cs_radius_50">
            <img src="assets/img/icons/service_icon_6.svg" alt="Icon">
          </div>
          <h3 class="cs_iconbox_title cs_fs_32 cs_semibold"><a href="service-details.html">Message Therapy</a></h3>
          <p class="cs_iconbox_subtitle">The other hand, we denounce with righteous Indignation and dislike men who</p>
          <a href="service-details.html" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
            <span>Get Services</span>
            <div class="cs_text_btn_icon cs_center">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </div>
          </a>
        </div>
        <div class="cs_iconbox cs_style_8 cs_white_bg">
          <div class="cs_iconbox_icon cs_center cs_radius_50">
            <img src="assets/img/icons/service_icon_7.svg" alt="Icon">
          </div>
          <h3 class="cs_iconbox_title cs_fs_32 cs_semibold"><a href="service-details.html">Laser Therapy</a></h3>
          <p class="cs_iconbox_subtitle">The other hand, we denounce with righteous Indignation and dislike men who</p>
          <a href="service-details.html" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
            <span>Get Services</span>
            <div class="cs_text_btn_icon cs_center">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </div>
          </a>
        </div>
        <div class="cs_iconbox cs_style_8 cs_white_bg">
          <div class="cs_iconbox_icon cs_center cs_radius_50">
            <img src="assets/img/icons/service_icon_8.svg" alt="Icon">
          </div>
          <h3 class="cs_iconbox_title cs_fs_32 cs_semibold"><a href="service-details.html">Sports Injury Therapy</a>
          </h3>
          <p class="cs_iconbox_subtitle">The other hand, we denounce with righteous Indignation and dislike men who</p>
          <a href="service-details.html" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
            <span>Get Services</span>
            <div class="cs_text_btn_icon cs_center">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </div>
          </a>
        </div>
        <div class="cs_iconbox cs_style_8 cs_white_bg">
          <div class="cs_iconbox_icon cs_center cs_radius_50">
            <img src="assets/img/icons/service_icon_9.svg" alt="Icon">
          </div>
          <h3 class="cs_iconbox_title cs_fs_32 cs_semibold"><a href="service-details.html">Join Mobilization</a></h3>
          <p class="cs_iconbox_subtitle">The other hand, we denounce with righteous Indignation and dislike men who</p>
          <a href="service-details.html" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
            <span>Get Services</span>
            <div class="cs_text_btn_icon cs_center">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </div>
          </a>
        </div>
      </div>
      <div class="cs_height_0 cs_height_lg_40"></div>
      <div class="cs_center">
        <a href="services.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg ">
          <span class="cs_btn_text">More Services</span>
        </a>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Service Section -->
  <!-- Start Features Section -->
  <section>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_text_center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Features</p>
        <h2 class="cs_section_title cs_fs_48 mb-0">Why Choose Us</h2>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="row cs_row_gap_60 cs_gap_y_40">
        <div class="col-lg-4">
          <div class="cs_iconbox cs_style_9">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/feature_icon_8.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h3 class="cs_iconbox_title cs_fs_24 cs_semibold">100% Satisfactions</h3>
              <p class="cs_iconbox_subtitle cs_heading_color mb-0">The other hand, we denounce with righteous
                Indignation and dislike men who</p>
            </div>
          </div>
          <div class="cs_iconbox cs_style_9">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/feature_icon_9.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h3 class="cs_iconbox_title cs_fs_24 cs_semibold">Expert Team Member </h3>
              <p class="cs_iconbox_subtitle cs_heading_color mb-0">The other hand, we denounce with righteous
                Indignation and dislike men who</p>
            </div>
          </div>
          <div class="cs_iconbox cs_style_9">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/feature_icon_10.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h3 class="cs_iconbox_title cs_fs_24 cs_semibold">Modern Technology</h3>
              <p class="cs_iconbox_subtitle cs_heading_color mb-0">The other hand, we denounce with righteous
                Indignation and dislike men who</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cs_features_thumbnail">
            <img src="assets/img/feature_img_1.jpeg" alt="Image">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="cs_iconbox cs_style_9">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/feature_icon_11.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h3 class="cs_iconbox_title cs_fs_24 cs_semibold">Emergency Services</h3>
              <p class="cs_iconbox_subtitle cs_heading_color mb-0">The other hand, we denounce with righteous
                Indignation and dislike men who</p>
            </div>
          </div>
          <div class="cs_iconbox cs_style_9">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/feature_icon_12.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h3 class="cs_iconbox_title cs_fs_24 cs_semibold">All Reported Online System</h3>
              <p class="cs_iconbox_subtitle cs_heading_color mb-0">The other hand, we denounce with righteous
                Indignation and dislike men who</p>
            </div>
          </div>
          <div class="cs_iconbox cs_style_9">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/feature_icon_13.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h3 class="cs_iconbox_title cs_fs_24 cs_semibold">24/7 Days Services</h3>
              <p class="cs_iconbox_subtitle cs_heading_color mb-0">The other hand, we denounce with righteous
                Indignation and dislike men who</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Features Section -->
  <!-- Start Pricing Section -->
  <section class="cs_pricing_section cs_accent_bg cs_hide_before_after">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_text_center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_white_color cs_heading_font">Pricing plan</p>
        <h2 class="cs_section_title cs_fs_48 cs_white_color mb-0">pricing plan to your Needs <br>Rehabs Solutions</h2>
      </div>
      <div class="cs_height_32 cs_height_lg_30"></div>
      <div class="cs_tabs cs_style_1">
        <ul class="cs_tab_links cs_pricing_control cs_type_2 cs_center cs_mp0">
          <li class="active"><a href="#cs_monthly">Monthly</a><span class="cs_switch"></span></li>
          <li><a href="#cs_yearly">Yearly</a></li>
        </ul>
        <div class="cs_height_32 cs_height_lg_30"></div>
        <div class="cs_tab_body">
          <div class="cs_tab active" id="cs_monthly">
            <div class="row cs_row_gap_30 cs_gap_y_30">
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_2">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Premium plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_white_bg cs_radius_50">
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
                      class="cs_pricing_btn cs_fs_18 cs_semibold cs_accent_color cs_white_bg cs_hover_up">Choose This
                      Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_2 active">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Basic plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_white_bg cs_radius_50">
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
                      class="cs_pricing_btn cs_fs_18 cs_semibold cs_accent_color cs_white_bg cs_hover_up">Choose This
                      Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_2">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Popular Plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_white_bg cs_radius_50">
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
                      class="cs_pricing_btn cs_fs_18 cs_semibold cs_accent_color cs_white_bg cs_hover_up">Choose This
                      Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="cs_tab" id="cs_yearly">
            <div class="row cs_row_gap_30 cs_gap_y_30">
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_2">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Premium plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_white_bg cs_radius_50">
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
                      class="cs_pricing_btn cs_fs_18 cs_semibold cs_accent_color cs_white_bg cs_hover_up">Choose This
                      Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_2 active">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Basic plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_white_bg cs_radius_50">
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
                      class="cs_pricing_btn cs_fs_18 cs_semibold cs_accent_color cs_white_bg cs_hover_up">Choose This
                      Plan</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="cs_pricing_table cs_style_1 cs_type_2">
                  <div class="cs_pricing_headedr">
                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Popular Plan</h3>
                    <a href="contact.html" class="cs_pricing_icon cs_center cs_white_bg cs_radius_50">
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
                      class="cs_pricing_btn cs_fs_18 cs_semibold cs_accent_color cs_white_bg cs_hover_up">Choose This
                      Plan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Pricing Section -->
  <!-- Start Team Section -->
  <section class="cs_slider cs_style_1 cs_slider_gap_30">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="row cs_row_gap_40 cs_gap_y_40">
        <div class="col-lg-4 wow fadeInLeft" data-wow-duration="0.9s" data-wow-delay="0.25s">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Active Employees</p>
            <h2 class="cs_section_title cs_fs_48 mb-0">Meet Our Expert Physiotherapist</h2>
            <div class="cs_height_20 cs_height_lg_20"></div>
            <p class="mb-0">Protect your smile and keep it healthy, with the latest technology available in your
              neighbourhood Painless Therapy Systems.</p>
            <div class="cs_height_30 cs_height_lg_20"></div>
            <a href="doctors.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg ">
              <span class="cs_btn_text">Read More</span>
            </a>
            <div class="cs_height_60 cs_height_lg_40"></div>
            <h2 class="cs_transparent_text cs_fs_40 mb-0">TEAM MEMBER</h2>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="cs_full_screen_right cs_variable_width_wrap cs_ptb_12">
            <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="700" data-center="0"
              data-variable-width="1" data-slides-per-view="1">
              <div class="cs_slider_wrapper">
                <div class="cs_slide">
                  <div class="cs_team cs_style_1 cs_type_3">
                    <div class="cs_team_thumbnail cs_center">
                      <img src="assets/img/team_12.jpeg" alt="Team Thumbnail">
                    </div>
                    <div class="cs_team_bio cs_accent_bg">
                      <div class="cs_social_btns cs_style_3">
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-pinterest-p"></i></a>
                      </div>
                      <h3 class="cs_team_title cs_fs_20 cs_medium cs_white_color"><a href="doctor-details.html">Savannah
                          Nguyen</a></h3>
                      <p class="cs_team_subtitle cs_white_color mb-0">Physiotherapist</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_team cs_style_1 cs_type_3">
                    <div class="cs_team_thumbnail cs_center">
                      <img src="assets/img/team_13.jpeg" alt="Team Thumbnail">
                    </div>
                    <div class="cs_team_bio cs_accent_bg">
                      <div class="cs_social_btns cs_style_3">
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-pinterest-p"></i></a>
                      </div>
                      <h3 class="cs_team_title cs_fs_20 cs_medium cs_white_color"><a href="doctor-details.html">Kristin
                          Watson</a></h3>
                      <p class="cs_team_subtitle cs_white_color mb-0">Nursing Assistant</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_team cs_style_1 cs_type_3">
                    <div class="cs_team_thumbnail cs_center">
                      <img src="assets/img/team_14.jpeg" alt="Team Thumbnail">
                    </div>
                    <div class="cs_team_bio cs_accent_bg">
                      <div class="cs_social_btns cs_style_3">
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-pinterest-p"></i></a>
                      </div>
                      <h3 class="cs_team_title cs_fs_20 cs_medium cs_white_color"><a href="doctor-details.html">Leslie
                          Alexander</a></h3>
                      <p class="cs_team_subtitle cs_white_color mb-0">Physiotherapy</p>
                    </div>
                  </div>
                </div>
                <div class="cs_slide">
                  <div class="cs_team cs_style_1 cs_type_3">
                    <div class="cs_team_thumbnail cs_center">
                      <img src="assets/img/team_15.jpeg" alt="Team Thumbnail">
                    </div>
                    <div class="cs_team_bio cs_accent_bg">
                      <div class="cs_social_btns cs_style_3">
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="cs_center cs_radius_5">
                          <i class="fa-brands fa-pinterest-p"></i></a>
                      </div>
                      <h3 class="cs_team_title cs_fs_20 cs_medium cs_white_color"><a href="doctor-details.html">Jenny
                          Wilson</a></h3>
                      <p class="cs_team_subtitle cs_white_color mb-0">Physiotherapist</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="cs_pagination cs_style_1 cs_type_1"></div>
    </div>
  </section>
  <!-- End Team Section -->
  <!-- Start Testimonial Section -->
  <section class="cs_slider cs_style_1 cs_slider_gap_30 cs_ptb_12 position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
        data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1"
        data-md-slides="2" data-lg-slides="2" data-add-slides="2">
        <div class="cs_slider_wrapper">
          <div class="cs_slide">
            <div class="cs_testimonial cs_style_3 cs_white_bg">
              <div class="cs_quote_icon position-absolute">
                <img src="assets/img/icons/quote_icon_5.svg" alt="Quote Icon">
              </div>
              <div class="cs_avatar cs_style_1">
                <div class="cs_avatar_icon cs_radius_50">
                  <img src="assets/img/avatar_1.png" alt="Image">
                </div>
                <div class="cs_avatar_info">
                  <h3 class="cs_avatar_title cs_fs_20">Marvin McKinney</h3>
                  <p class="cs_avatar_subtitle cs_fs_18 cs_accent_color mb-0">Physical therapy</p>
                </div>
              </div>
              <blockquote class="cs_testimonial_subtitle cs_fs_24 cs_medium cs_accent_color cs_heading_font">“Pain
                management was effective, and I was comfortable during and after the treatment. The staff provided
                emotional support and made sure I understood every step of my care.”</blockquote>
              <div class="cs_rating_container">
                <div class="cs_rating" data-rating="5">
                  <div class="cs_rating_percentage"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_testimonial cs_style_3 cs_white_bg">
              <div class="cs_quote_icon position-absolute">
                <img src="assets/img/icons/quote_icon_5.svg" alt="Quote Icon">
              </div>
              <div class="cs_avatar cs_style_1">
                <div class="cs_avatar_icon cs_radius_50">
                  <img src="assets/img/avatar_2.png" alt="Image">
                </div>
                <div class="cs_avatar_info">
                  <h3 class="cs_avatar_title cs_fs_20">Dr. Mehara Banu</h3>
                  <p class="cs_avatar_subtitle cs_fs_18 cs_accent_color mb-0">Physical therapy</p>
                </div>
              </div>
              <blockquote class="cs_testimonial_subtitle cs_fs_24 cs_medium cs_accent_color cs_heading_font">“Pain
                management was effective, and I was comfortable during and after the treatment. The staff provided
                emotional support and made sure I understood every step of my care.”</blockquote>
              <div class="cs_rating_container">
                <div class="cs_rating" data-rating="4.5">
                  <div class="cs_rating_percentage"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="cs_slide">
            <div class="cs_testimonial cs_style_3 cs_white_bg">
              <div class="cs_quote_icon position-absolute">
                <img src="assets/img/icons/quote_icon_5.svg" alt="Quote Icon">
              </div>
              <div class="cs_avatar cs_style_1">
                <div class="cs_avatar_icon cs_radius_50">
                  <img src="assets/img/avatar_3.png" alt="Image">
                </div>
                <div class="cs_avatar_info">
                  <h3 class="cs_avatar_title cs_fs_20">Marvin Jackson</h3>
                  <p class="cs_avatar_subtitle cs_fs_18 cs_accent_color mb-0">Physical therapy</p>
                </div>
              </div>
              <blockquote class="cs_testimonial_subtitle cs_fs_24 cs_medium cs_accent_color cs_heading_font">“Pain
                management was effective, and I was comfortable during and after the treatment. The staff provided
                emotional support and made sure I understood every step of my care.”</blockquote>
              <div class="cs_rating_container">
                <div class="cs_rating" data-rating="5">
                  <div class="cs_rating_percentage"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_0 cs_height_lg_40"></div>
    <div class="cs_slider_arrows cs_style_3">
      <div class="cs_arrow_wrap cs_arrow_wrap_left cs_center">
        <div class="cs_left_arrow cs_radius_50 cs_center slick-arrow">
          <i class="fa-solid fa-chevron-left"></i>
        </div>
      </div>
      <div class="cs_arrow_wrap cs_arrow_wrap_right cs_center">
        <div class="cs_right_arrow cs_radius_50 cs_center slick-arrow">
          <i class="fa-solid fa-chevron-right"></i>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Testimonial Section -->
  <!-- Start Appointment Section -->
  <section class="cs_video_section cs_style_4 cs_accent_bg">
    <div class="container-fluid">
      <div class="cs_video_wrapper cs_bg_filed" data-src="assets/img/video_bg_8.jpeg">
        <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_player_btn cs_style_2 cs_center cs_video_open">
          <span></span>
        </a>
      </div>
      <div class="cs_form_counter_wrapper">
        <div class="cs_appointment_form_wrapper cs_type_1 cs_radius_10">
          <h3 class="cs_appointment_heading">Make an Appointment</h3>
          <form class="cs_appointment_form row cs_gap_y_30">
            <div class="col-md-6">
              <div class="cs_form_field_wrapper">
                <input type="text" name="name" class="cs_form_field cs_fs_14" placeholder="Your Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="cs_form_field_wrapper">
                <input type="text" name="phone" class="cs_form_field cs_fs_14" placeholder="Phone Number">
              </div>
            </div>
            <div class="col-md-6">
              <div class="cs_form_field_wrapper">
                <select name="department" class="cs_form_field_wrapper cs_select" data-placeholder="Select Department">
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
              <div class="cs_form_field_wrapper">
                <input type="text" name="date" class="cs_form_field" id="datepicker" placeholder="DD MM  YY">
                <span class="cs_input_icon position-absolute"><i class="fa-regular fa-calendar-days"></i></span>
              </div>
            </div>
            <div class="col-md-12">
              <div class="cs_form_field_wrapper">
                <textarea name="Message" rows="6" class="cs_form_field cs_fs_14" placeholder="Write Message"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg ">
                <span class="cs_btn_text">Book An Appointment</span>
              </button>
            </div>
          </form>
        </div>
        <div class="cs_counter_2_wrapper">
          <div class="cs_iconbox cs_style_10">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/counter_icon_1.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h2 class="cs_iconbox_title cs_fs_72 cs_white_color odometer mb-0" data-count-to="100">0</h2>
              <p class="cs_iconbox_subtitle cs_white_color mb-0">Skilled Therapist</p>
            </div>
          </div>
          <div class="cs_iconbox cs_style_10">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/counter_icon_2.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h2 class="cs_iconbox_title cs_fs_72 cs_white_color odometer mb-0" data-count-to="880">0</h2>
              <p class="cs_iconbox_subtitle cs_white_color mb-0">Solved Cases</p>
            </div>
          </div>
          <div class="cs_iconbox cs_style_10">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/counter_icon_3.svg" alt="Icon">
            </div>
            <div class="cs_iconbox_info">
              <h2 class="cs_iconbox_title cs_fs_72 cs_white_color odometer mb-0" data-count-to="640">0</h2>
              <p class="cs_iconbox_subtitle cs_white_color mb-0">Happy Patients</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Appointment Section -->
  <!-- Start Blog Section -->
  <section class="cs_slider cs_style_1 position-relative">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
      <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <div class="cs_section_heading_left">
          <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Blog & news</p>
          <h2 class="cs_section_title cs_fs_48 mb-0">Take a Look at The Latest <br> Articles & News</h2>
        </div>
        <div class="cs_section_heading_right">
          <div class="cs_slider_arrows cs_style_1">
            <div class="cs_left_arrow cs_center slick-arrow"><i class="fa-solid fa-arrow-left-long"></i></div>
            <div class="cs_right_arrow cs_center slick-arrow"><i class="fa-solid fa-arrow-right-long"></i></div>
          </div>
        </div>
      </div>
      <div class="cs_height_50 cs_height_lg_40"></div>
      <div class="cs_slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0"
        data-variable-width="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="1"
        data-md-slides="1" data-lg-slides="1" data-add-slides="1">
        <div class="cs_slider_wrapper">
          <div class="cs_slide">
            <div class="row cs_row_gap_30 cs_gap_y_24">
              <div class="col-lg-6">
                <article class="cs_post cs_style_2 position-relative">
                  <div class="cs_post_info">
                    <div class="cs_post_meta">Jan 04, 2025</div>
                    <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Medi Tips How to Physical Therapy on
                        your Health Conditions.</a></h3>
                    <a href="blog-details.html" class="cs_text_btn cs_fs_18 cs_heading_color">
                      <span>Learn More</span>
                      <div class="cs_text_btn_icon cs_center">
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                      </div>
                    </a>
                  </div>
                  <div class="cs_height_24 cs_height_lg_24"></div>
                  <a href="blog-details.html" class="cs_post_thumbnail">
                    <img src="assets/img/post_7.jpeg" alt="Post Thumbnail">
                  </a>
                </article>
              </div>
              <div class="col-lg-6">
                <div class="row cs_gap_y_24">
                  <div class="col-12">
                    <article class="cs_post cs_style_2 cs_type_2 position-relative">
                      <a href="blog-details.html" class="cs_post_thumbnail">
                        <img src="assets/img/post_8.jpeg" alt="Post Thumbnail">
                      </a>
                      <div class="cs_post_info">
                        <div class="cs_post_meta">Aug 15, 2024</div>
                        <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Therapy on your Health Secure
                            Conditions</a></h3>
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
                  <div class="col-12">
                    <article class="cs_post cs_style_2 cs_type_2 position-relative">
                      <a href="blog-details.html" class="cs_post_thumbnail">
                        <img src="assets/img/post_9.jpeg" alt="Post Thumbnail">
                      </a>
                      <div class="cs_post_info">
                        <div class="cs_post_meta">August 04, 2024</div>
                        <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Improve your health Sports
                            Therapy.</a></h3>
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
            </div>
          </div>
          <div class="cs_slide">
            <div class="row cs_row_gap_30 cs_gap_y_24">
              <div class="col-lg-6">
                <article class="cs_post cs_style_2 position-relative">
                  <div class="cs_post_info">
                    <div class="cs_post_meta">Jan 04, 2025</div>
                    <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Medi Tips How to Physical Therapy on
                        your Health Conditions.</a></h3>
                    <a href="blog-details.html" class="cs_text_btn cs_fs_18 cs_heading_color">
                      <span>Learn More</span>
                      <div class="cs_text_btn_icon cs_center">
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                      </div>
                    </a>
                  </div>
                  <div class="cs_height_24 cs_height_lg_24"></div>
                  <a href="blog-details.html" class="cs_post_thumbnail">
                    <img src="assets/img/post_7.jpeg" alt="Post Thumbnail">
                  </a>
                </article>
              </div>
              <div class="col-lg-6">
                <div class="row cs_gap_y_24">
                  <div class="col-12">
                    <article class="cs_post cs_style_2 cs_type_2 position-relative">
                      <a href="blog-details.html" class="cs_post_thumbnail">
                        <img src="assets/img/post_8.jpeg" alt="Post Thumbnail">
                      </a>
                      <div class="cs_post_info">
                        <div class="cs_post_meta">Aug 15, 2024</div>
                        <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Therapy on your Health Secure
                            Conditions</a></h3>
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
                  <div class="col-12">
                    <article class="cs_post cs_style_2 cs_type_2 position-relative">
                      <a href="blog-details.html" class="cs_post_thumbnail">
                        <img src="assets/img/post_9.jpeg" alt="Post Thumbnail">
                      </a>
                      <div class="cs_post_info">
                        <div class="cs_post_meta">August 04, 2024</div>
                        <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Improve your health Sports
                            Therapy.</a></h3>
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
  </section>
  <!-- End Blog Section -->
@endsection
