  <!-- Start Footer Section -->
  <footer class="cs_footer cs_style_1 cs_heading_bg">
    <div class="container cs_white_color">
      <div class="cs_footer_row">
        <div class="cs_footer_col">
          <div class="cs_footer_widget">
            <div class="cs_footer_text_widget">
              <img src="{{ asset('assets/img/footer_logo.svg') }}" alt="Logo">
              <p>Far far away, behind the word bore et dolore magna aliqua. Ut enim ad on minim veniam, quis nostrud</p>
            </div>
            <div class="cs_social_btns cs_style_1">
              <a href="#" class="cs_center">
                <i class="fa-brands fa-facebook-f"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-x-twitter"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-instagram"></i>
              </a>
              <a href="#" class="cs_center">
                <i class="fa-brands fa-pinterest-p"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="cs_footer_col">
          <div class="cs_footer_widget">
            <h2 class="cs_footer_widget_title cs_fs_32 cs_white_color cs_bold">Links</h2>
            <ul class="cs_footer_widget_menu">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
              <li><a href="#">Refund</a></li>
              <li><a href="#">Help Center</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="cs_footer_col">
          <div class="cs_footer_widget">
            <h2 class="cs_footer_widget_title cs_fs_32 cs_white_color cs_bold">Resources</h2>
            <ul class="cs_footer_widget_menu">
              <li><a href="#">Demos</a></li>
              <li><a href="#">Instructions</a></li>
              <li><a href="#">Personal Meeting</a></li>
              <li><a href="{{ route('doctors') }}">Doctor List</a></li>
              <li><a href="#">Refund Policy</a></li>
            </ul>
          </div>
        </div>
        <div class="cs_footer_col">
          <div class="cs_footer_widget">
            <h2 class="cs_footer_widget_title cs_fs_32 cs_white_color cs_bold">Office</h2>
            <ul class="cs_footer_widget_menu cs_address">
              <li>America- 66 Brooklyn golden street 600 New York. USA</li>
              <li class="cs_fs_32 cs_bold cs_phone_number">
                <div class="cs_height_20 cs_height_lg_20"></div>
                <a href="tel:+444547800112">+1 (212) 621-5896</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_footer_bottom cs_white_color">
      <div class="container">
        <div class="cs_footer_bottom_in">
          <p class="cs_copyright mb-0">medixal© {{ date('Y') }}. All Rights Reserved.</p>
          <ul class="cs_footer_widget_menu">
            <li><a href="#">Privacy &amp; Cookie Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer Section -->
  <!-- Start Scroll Up Button -->
  <span class="cs_scrollup">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
    </svg>
  </span>
  <!-- End Scroll Up Button -->

  <!-- Start Color Chnage  -->
  <div class="cs_color_settings">
    <div class="cs_color_settings_btn cs_center"><i class="fa-solid fa-gear"></i></div>
    <div class="cs_color_settings_in">
      <div class="cs_color_option cs_color_option_bg_1 cs_center" data-color="#132573">
        <i class="fa-solid fa-check"></i>
      </div>
      <div class="cs_color_option cs_color_option_bg_2 cs_center active" data-color="#09bbaf">
        <i class="fa-solid fa-check"></i>
      </div>
      <div class="cs_color_option cs_color_option_bg_3 cs_center" data-color="#a81874">
        <i class="fa-solid fa-check"></i>
      </div>
      <div class="cs_color_option cs_color_option_bg_4 cs_center" data-color="#2d3928">
        <i class="fa-solid fa-check"></i>
      </div>
      <div class="cs_color_option cs_color_option_bg_5 cs_center" data-color="#966046">
        <i class="fa-solid fa-check"></i>
      </div>
      <div class="cs_color_option cs_color_option_bg_6 cs_center" data-color="#307bc4">
        <i class="fa-solid fa-check"></i>
      </div>
    </div>
  </div>
  <!-- End Color Chnage  -->

  <!-- Script -->
  <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/wow.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.slick.min.js') }}"></script>
  <script src="{{ asset('assets/js/odometer.js') }}"></script>
  <script src="{{ asset('assets/js/light-gallery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-timepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/select2.min.js') }}"></script>
  <script src="{{ asset('assets/js/ripples.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
