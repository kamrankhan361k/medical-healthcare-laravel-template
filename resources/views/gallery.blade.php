@extends('layouts.app')
@section('content')
  <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Gallery</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Gallery</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Gallery Section -->
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row cs_row_gap_30 cs_gap_y_30 cs_gallery_list">
      <div class="col-lg-5">
        <div class="cs_card cs_style_7">
          <a href="assets/img/gallery_img_1.jpeg" class="cs_gallery_item">
            <img src="assets/img/gallery_img_1.jpeg" alt="Gallery Image">
          </a>
          <div class="cs_card_info">
            <h3 class="cs_card_title cs_fs_32 cs_white_color cs_fs_32 cs_white_color">Phychology Cognito</h3>
            <p class="cs_card_subtitle cs_fs_14 cs_white_color cs_fs_14 cs_white_color">Adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="assets/img/gallery_img_1.jpeg"
              class="cs_card_btn cs_center cs_white_bg cs_radius_50 cs_gallery_item">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row cs_row_gap_30 cs_gap_y_30">
          <div class="col-12">
            <div class="cs_card cs_style_7">
              <a href="assets/img/gallery_img_2.jpeg" class="cs_gallery_item">
                <img src="assets/img/gallery_img_2.jpeg" alt="Gallery Image">
              </a>
              <div class="cs_card_info">
                <h3 class="cs_card_title cs_fs_32 cs_white_color">Phychology Cognito</h3>
                <p class="cs_card_subtitle cs_fs_14 cs_white_color">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <a href="assets/img/gallery_img_2.jpeg"
                  class="cs_card_btn cs_center cs_white_bg cs_radius_50 cs_gallery_item">
                  <span><i class="fa-solid fa-arrow-right-long"></i></span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row cs_row_gap_30 cs_gap_y_30">
              <div class="col-md-6">
                <div class="cs_card cs_style_7">
                  <a href="assets/img/gallery_img_3.jpeg" class="cs_gallery_item">
                    <img src="assets/img/gallery_img_3.jpeg" alt="Gallery Image">
                  </a>
                  <div class="cs_card_info">
                    <h3 class="cs_card_title cs_fs_32 cs_white_color">Phychology Cognito</h3>
                    <p class="cs_card_subtitle cs_fs_14 cs_white_color">Adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua.</p>
                    <a href="assets/img/gallery_img_3.jpeg"
                      class="cs_card_btn cs_center cs_white_bg cs_radius_50 cs_gallery_item">
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="cs_card cs_style_7">
                  <a href="assets/img/gallery_img_4.jpeg" class="cs_gallery_item">
                    <img src="assets/img/gallery_img_4.jpeg" alt="Gallery Image">
                  </a>
                  <div class="cs_card_info">
                    <h3 class="cs_card_title cs_fs_32 cs_white_color">Phychology Cognito</h3>
                    <p class="cs_card_subtitle cs_fs_14 cs_white_color">Adipiscing elit, sed do eiusmod tempor
                      incididunt ut labore et dolore magna aliqua.</p>
                    <a href="assets/img/gallery_img_4.jpeg"
                      class="cs_card_btn cs_center cs_white_bg cs_radius_50 cs_gallery_item">
                      <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <!-- End Gallery Section -->
@endsection
