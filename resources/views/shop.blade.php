@extends('layouts.app')
@section('content')
 <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Shop</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Shop</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Product List -->
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_shop_filter_wrap">
      <div class="cs_result_info">
        <span class=" cs_fs_18 cs_bold cs_heading_color">Showing Result:</span>
        <span>1–9 Out of 38</span>
      </div>
      <form action="#" class="cs_shop_filter_form cs_fs_18 cs_bold cs_heading_color">
        <select>
          <option value="latest">Sort by latest</option>
          <option value="high">Sort by low price</option>
          <option value="low">Sort by high price</option>
        </select>
      </form>
    </div>
    <div class="cs_height_50 cs_height_lg_40"></div>
    <div class="row cs_row_gap_30 cs_gap_y_30">
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_1.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">BP Machine</a>
            </h2>
            <p class="cs_product_price cs_fs_18"><s>$1000.00</s> <span class="cs_medium cs_heading_color">$800.00</span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_2.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">Contact Thermometer</a>
            </h2>
            <p class="cs_product_price cs_fs_18"><s>$900.00</s> <span class="cs_medium cs_heading_color">$800.00</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_3.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">Hand Sanitizer</a>
            </h2>
            <p class="cs_product_price cs_fs_18"><s>$850.00</s> <span class="cs_medium cs_heading_color">$750.00</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_4.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">Thermometer</a></h2>
            <p class="cs_product_price cs_fs_18"><s>$10.00</s> <span class="cs_medium cs_heading_color">$8.00</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_5.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">Stethoscope</a></h2>
            <p class="cs_product_price cs_fs_18"><s>$100.00</s> <span class="cs_medium cs_heading_color">$80.00</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_6.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">Corona Mask</a></h2>
            <p class="cs_product_price cs_fs_18"><s>$200.00</s> <span class="cs_medium cs_heading_color">$180.00</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_7.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">Syringe</a></h2>
            <p class="cs_product_price cs_fs_18"><s>$100.00</s> <span class="cs_medium cs_heading_color">$80.00</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_8.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">Diabetics Machine</a></h2>
            <p class="cs_product_price cs_fs_18"><s>$300.00</s> <span class="cs_medium cs_heading_color">$280.00</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="cs_product_card cs_style_1">
          <div class="cs_product_thumbnail cs_center">
            <img src="assets/img/shop/product_9.png" alt="Product">
            <div class="cs_card_btns">
              <a href="cart.html"><i class="fa-solid fa-cart-shopping"></i></a>
              <a href="#"><i class="fa-solid fa-heart"></i></a>
              <a href="shop-details.html"><i class="fa-solid fa-eye"></i></a>
            </div>
          </div>
          <div class="cs_product_info text-center">
            <h2 class="cs_product_title cs_fs_20 cs_semibold"><a href="shop-details.html">Electric Toothbrush</a>
            </h2>
            <p class="cs_product_price cs_fs_18"><s>$100.00</s> <span class="cs_medium cs_heading_color">$80.00</span>
          </div>
        </div>
      </div>
    </div>
    <div class="cs_height_50 cs_height_lg_40"></div>
    <ul class="cs_pagination_box cs_center cs_white_color cs_mp_0 cs_semibold">
      <li>
        <a class="cs_pagination_item cs_center cs_radius_6 active" href="shop.html">1</a>
      </li>
      <li>
        <a class="cs_pagination_item cs_center cs_radius_6" href="shop.html">2</a>
      </li>
      <li>
        <a href="#" class="cs_pagination_item cs_center cs_radius_6">
          <i class="fa-solid fa-arrow-right-long"></i>
        </a>
      </li>
    </ul>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <!-- End Product List -->
@endsection
