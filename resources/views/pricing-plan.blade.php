@extends('layouts.app')
@section('content')
  <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Pricing Plan</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Pricing Plan</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10 active">
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
                <div class="cs_pricing_headedr">
                  <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Enterprise Plan</h3>
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
            <div class="col-lg-4">
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
                <div class="cs_pricing_headedr">
                  <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Popular Plan</h3>
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
                <div class="cs_pricing_headedr">
                  <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Regular Plan</h3>
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
                <div class="cs_pricing_headedr">
                  <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Premium plan</h3>
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10 active">
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
                <div class="cs_pricing_headedr">
                  <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Enterprise Plan</h3>
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
            <div class="col-lg-4">
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
                <div class="cs_pricing_headedr">
                  <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Popular Plan</h3>
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
                <div class="cs_pricing_headedr">
                  <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Regular Plan</h3>
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
              <div class="cs_pricing_table cs_style_1 cs_type_4 cs_radius_10">
                <div class="cs_pricing_headedr">
                  <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Premium plan</h3>
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
      </div>
    </div>
  </div>
</section>
<!-- End Pricing Section -->
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
