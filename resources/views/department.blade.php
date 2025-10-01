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
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Department</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Department</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
 <!-- Start Department Section -->
 <section class="cs_department cs_style_1">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_text_center">
      <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Our Department</p>
      <h2 class="cs_section_title cs_fs_48 mb-0">experienced in Multiple medical <br> practices for <span
          class="cs_accent_color">your Health</span></h2>
    </div>
    <div class="cs_height_50 cs_height_lg_40"></div>
    <div class="row cs_row_gap_30 cs_gap_y_30">
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_1.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Emergency Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_2.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Pediatric Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_3.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Gynecology Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_4.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Cardiology Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_5.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Neurology
              Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_6.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Psychiatry Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_6.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Cardiology
              Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_2.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Dental Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
      <div class="col-xl-4 col-md-6">
        <a href="department-details.html" class="cs_iconbox cs_style_1 cs_radius_10 position-relative w-100">
          <div class="cs_iconbox_header">
            <div class="cs_iconbox_icon cs_center">
              <img src="assets/img/icons/department_icon_5.svg" alt="Icon">
            </div>
            <h3 class="cs_iconbox_title cs_fs_32 cs_bold mb-0">Neurology Department</h3>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <p class="cs_iconbox_subtitle cs_fs_18 cs_heading_color mb-0">Far far away, behind the word bore et dolore magna Ut enim ad veniam, quis nostrud</p>
          <div class="cs_iconbox_shape position-absolute"></div>
        </a>
      </div>
    </div>
  </div>
</section>
<!-- End Department Section -->
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
