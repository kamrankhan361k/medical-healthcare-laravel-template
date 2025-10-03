@extends('layouts.app')
@section('content')
  <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Blog Details</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Blog Details</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Blog Details Section -->
   <div class="cs_height_120 cs_height_lg_80"></div>
   <div class="container">
      <div class="row cs_gap_y_40">
        <div class="col-lg-8">
          <div class="cs_post_details cs_style_1 cs_heading_font">
            <div class="cs_post_thumbnail cs_radius_10">
              <img src="assets/img/post_details_1.jpeg" alt="Post Image">
            </div>
            <ul class="cs_post_meta cs_fs_14 cs_accent_color cs_mp0">
              <li><i class="fa-solid fa-calendar"></i>26 June 2023</li>
              <li><i class="fa-solid fa-bookmark"></i>Technology</li>
              <li><i class="fa-solid fa-message"></i>2 Comments</li>
            </ul>
            <hr>
            <div class="cs_height_24 cs_height_lg_20"></div>
            <p>Vast numbers of employees now work remotely, and it’s too late to develop a set of remote-work policies if you didn’t already have one. But there are ways to make the remote-work experience productive and engaging for employees</p>
            <p>Use both direct conversations and indirect observations to get visibility into employees’ challenges andconcerns. Use every opportunity to make clear to employees that you support and care them. To facilitate regular conversations between managers and employees, provide managers with guidance on how best to broach sensitive subjects arising from the COVID-19 pandemic, including alternative work models, job security and prospects, impact on staffing</p>
            <div class="row">
              <div class="col-lg-6 cs_radius_10">
                <img src="assets/img/post_details_2.jpeg" alt="Image">
              </div>
              <div class="col-lg-6 cs_radius_10">
                <img src="assets/img/post_details_3.jpeg" alt="Image">
              </div>
            </div>
            <p>The third Monday of January is supposed to be the most depressing day of the year. Whether you believe that or not, the long nights, cold weather, and trying to keep to new year resolutions are all probably getting to you a little by now. To make matters worse many will still be recovering from their Christmas spending. So how can you make today</p>
            <blockquote>
              <img src="assets/img/icons/quote_icon_7.svg" alt="Icon"> We appreciate the consistent high-quality service provided by their team goes above and beyond concerns promptly
            </blockquote>
            <p>Vast numbers of employees now work remotely, and it’s too late to develop a set of remote-work policies if you didn’t already have one. But there are ways to make the remote-work experience productive and engaging for employees</p>
            <p>Use both direct conversations and indirect observations to get visibility into employees’ challenges and concerns. Use every opportunity to make clear to employees that you support and care them. To facilitate regular conversations between managers and employees, provide managers with guidance on how best to broach sensitive subjects arising from the COVID-19 pandemic</p>
          </div>
          <div class="cs_tag_list cs_type_1 cs_fs_14 cs_heading_font cs_accent_color">
            <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Medical</a>
            <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Rehab</a>
            <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Psychology</a>
            <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Eyecare</a>
            <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Dental</a>
            <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Phytotherapy</a>
            <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Hospitality</a>
            <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Senior Care</a>
          </div>
          <div class="cs_height_30 cs_height_lg_30"></div>
          <div class="cs_btn_group cs_style_1 cs_semibold cs_heading_color">
            <a href="#"><i class="fa-solid fa-arrow-left-long"></i>Prev Post</a>
            <a href="#">Next Post<i class="fa-solid fa-arrow-right-long"></i></a>
          </div>
          <div class="cs_height_80 cs_height_lg_60"></div>
          <h2 class="cs_reply_title cs_fs_24 cs_semibold cs_accent_color">2 Comments</h2>
          <ul class="cs_comment_list cs_heading_font cs_mp0">
            <li class="cs_comment_body">
              <div class="cs_comment_thumbnail cs_radius_5">
                <img src="assets/img/avatar_4.jpeg" alt="Image">
              </div>
              <div class="cs_comment_info">
                <p>Legal expertise and is client focused we enhance entrepreneurial environment flexible supportive, allowing our lawyers introduced</p>
                <h3>Alexander Cameron</h3>
                <div class="cs_comment_meta_wrapper">
                  <div class="cs_comment_date">Juky 28, 2024</div>
                  <a href="#" class="cs_reply_btn cs_semibold cs_accent_color"><i class="fa-solid fa-reply"></i>
                    Reply</a>
                </div>
              </div>
            </li>
            <li class="cs_comment_body">
              <div class="cs_comment_thumbnail cs_radius_5">
                <img src="assets/img/avatar_5.jpeg" alt="Image">
              </div>
              <div class="cs_comment_info">
                <p>Legal expertise and is client focused we enhance entrepreneurial environment flexible supportive, allowing our lawyers introduced</p>
                <h3>Brooklyn Simmons</h3>
                <div class="cs_comment_meta_wrapper">
                  <div class="cs_comment_date">Jan 28, 2024</div>
                  <a href="#" class="cs_reply_btn cs_semibold cs_accent_color"><i class="fa-solid fa-reply"></i>
                    Reply</a>
                </div>
              </div>
            </li>
          </ul>
          <div class="cs_height_50 cs_height_lg_40"></div>
          <h2 class="cs_reply_heading cs_fs_24 cs_semibold cs_accent_color">Leave a Comment</h2>
          <form class="cs_reply_form row cs_gap_y_24 cs_heading_font" id="comment">
            <div class="col-md-6">
              <input type="text" name="name" placeholder="Your Name" class="cs_form_field">
            </div>
            <div class="col-md-6">
              <input type="email" name="email" placeholder="Email address" class="cs_form_field">
            </div>
            <div class="col-md-12">
              <textarea name="message" rows="6" placeholder="Write your message" class="cs_form_field"></textarea>
            </div>
            <div class="col-md-12">
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label m-0">
                  Save my name, email, and website in this browser for the next time I comment.
                </label>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="cs_btn cs_style_1 cs_accent_bg cs_fs_18 cs_semibold cs_radius_6">
                <span class="cs_btn_text">Send Message</span>
              </button>
            </div>
          </form>
        </div>
        <aside class="col-lg-4">
          <div class="cs_sidebar cs_style_1">
            <div class="cs_sidebar_widget cs_gray_bg cs_radius_10">
              <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Search</h3>
              <form action="#" class="cs_search cs_radius_6">
                <span class="cs_search_icon cs_accent_color"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" placeholder="Search....">
              </form>
            </div>
            <div class="cs_sidebar_widget cs_gray_bg cs_radius_10">
              <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Categories</h3>
              <ul class="cs_categories cs_accent_color cs_mp0">
                <li><a href="#">Medical</a><a href="#">(18)</a></li>
                <li><a href="#">Eye Care</a><a href="#">(5)</a></li>
                <li><a href="#">Dental</a><a href="#">(2)</a></li>
                <li><a href="#">Consulting</a><a href="#">(11)</a></li>
                <li><a href="#">Council Rehab</a><a href="#">(4)</a></li>
                <li><a href="#">Hospitality</a><a href="#">(8)</a></li>
              </ul>
            </div>
            <div class="cs_sidebar_widget cs_gray_bg cs_radius_10">
              <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Recent Posts</h3>
              <div class="cs_post cs_style_3">
                <a href="blog-details-right-sidebar.html" class="cs_post_thumbnail cs_radius_10">
                  <img src="assets/img/latest_post_1.jpeg" alt="Image" class="cs_zoom_in">
                </a>
                <div class="cs_post_info">
                  <h3 class="cs_post_title cs_fs_18 cs_semibold cs_heading_color"><a href="blog-details.html">Planning your online business goals with a specialists.</a>
                  </h3>
                  <div class="cs_post_meta cs_fs_14 cs_accent_color">26 Sep 2024</div>
                </div>
              </div>
              <div class="cs_post cs_style_3">
                <a href="blog-details-right-sidebar.html" class="cs_post_thumbnail cs_radius_10">
                  <img src="assets/img/latest_post_2.jpeg" alt="Image" class="cs_zoom_in">
                </a>
                <div class="cs_post_info">
                  <h3 class="cs_post_title cs_fs_18 cs_semibold cs_heading_color">
                    <a href="blog-details.html">Boost your startup business with our digital agency.</a>
                  </h3>
                  <div class="cs_post_meta cs_fs_14 cs_accent_color">26 Aug 2024</div>
                </div>
              </div>
              <div class="cs_post cs_style_3">
                <a href="blog-details-right-sidebar.html" class="cs_post_thumbnail cs_radius_10">
                  <img src="assets/img/latest_post_3.jpeg" alt="Image">
                </a>
                <div class="cs_post_info">
                  <h3 class="cs_post_title cs_fs_18 cs_semibold cs_heading_color">
                    <a href="blog-details.html">The importance of a strong digital for strat.</a>
                  </h3>
                  <div class="cs_post_meta cs_fs_14 cs_accent_color">15 Aug 2024</div>
                </div>
              </div>
            </div>
            <div class="cs_sidebar_widget cs_gray_bg cs_radius_10">
              <div class="cs_sidebar_tags">
                <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Tags</h3>
                <div class="cs_tag_list cs_fs_14 cs_heading_font cs_accent_color">
                  <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Medical</a>
                  <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Rehab</a>
                  <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Psychology</a>
                  <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Eyecare</a>
                  <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Dental</a>
                  <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Phytotherapy</a>
                  <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Hospitality</a>
                  <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Senior Care</a>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
   </div>
   <div class="cs_height_120 cs_height_lg_80"></div>
  <!-- End Blog Details Section -->
@endsection
