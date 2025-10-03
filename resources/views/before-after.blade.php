@extends('layouts.app')
@section('content')
 <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Before After</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Before After</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Before After Slider -->
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_before_after-in">
      <div class="cs_before_after">
        <div class="cs_after cs_single_slide cs_bg_filed" data-src="assets/img/after.jpeg">
          <div class="cs_after_badge cs_accent_bg cs_fs_36 cs_medium cs_white_color position-absolute">
            After</div>
        </div>
        <div class="cs_before cs_single_slide cs_bg_filed" data-src="assets/img/before.jpeg">
          <div class="cs_before_badge cs_accent_bg cs_fs_36 cs_medium cs_white_color position-absolute">
            Before</div>
        </div>
        <div class="cs_handle_before_after">
          <span></span>
        </div>
      </div>
    </div>
  </div>
  <!-- End Before After Slider -->
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
              <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Medi Tips How to Physical Fitness your Health</a></h3>
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
              <h3 class="cs_post_title cs_fs_32"><a href="blog-details.html">Improve your heart health with genetic testing.</a></h3>
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
              <p class="cs_cta_subtitle mb-0">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
