@extends('layouts.app')
@section('content')
 <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Cart</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Cart</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Cart Section -->
  <!-- Start Cart Section -->
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-8">
        <div class="table-responsive">
          <table class="cs_cart_table">
            <thead>
              <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="cs_cart_table_media">
                    <img src="assets/img/shop/cart-product-1.jpg" alt="Thumb">
                    <h3>Single Diabetics Machine</h3>
                  </div>
                </td>
                <td>$300.00</td>
                <td>
                  <div class="cs_quantity">
                    <button class="cs_quantity_button cs_accent_bg cs_center cs_radius_50 cs_decrement"><i
                        class="fa-solid fa-minus"></i></button>
                    <span class="cs_quantity_input">1</span>
                    <button class="cs_quantity_button cs_accent_bg cs_center cs_radius_50 cs_increment"><i
                        class="fa-solid fa-plus"></i></button>
                  </div>
                </td>
                <td>
                  $20.00
                </td>
                <td class="text-center">
                  <button class="cs_cart_table_close"><i class="fa-solid fa-xmark"></i></button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="cs_cart_table_media">
                    <img src="assets/img/shop/cart-product-2.jpg" alt="Thumb">
                    <h3>Bamboo made pen</h3>
                  </div>
                </td>
                <td>$300.00</td>
                <td>
                  <div class="cs_quantity">
                    <button class="cs_quantity_button cs_accent_bg cs_center cs_radius_50 cs_decrement"><i
                        class="fa-solid fa-minus"></i></button>
                    <span class="cs_quantity_input">1</span>
                    <button class="cs_quantity_button cs_accent_bg cs_center cs_radius_50 cs_increment"><i
                        class="fa-solid fa-plus"></i></button>
                  </div>
                </td>
                <td>$20.00</td>
                <td class="text-center">
                  <button class="cs_cart_table_close"><i class="fa-solid fa-xmark"></i></button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="cs_cart_table_media">
                    <img src="assets/img/shop/cart-product-3.jpg" alt="Thumb">
                    <h3>Natural toothbrush</h3>
                  </div>
                </td>
                <td>$300.00</td>
                <td>
                  <div class="cs_quantity">
                    <button class="cs_quantity_button cs_accent_bg cs_center cs_radius_50 cs_decrement"><i
                        class="fa-solid fa-minus"></i></button>
                    <span class="cs_quantity_input">1</span>
                    <button class="cs_quantity_button cs_accent_bg cs_center cs_radius_50 cs_increment"><i
                        class="fa-solid fa-plus"></i></button>
                  </div>
                </td>
                <td>
                  $20.00
                </td>
                <td class="text-center">
                  <button class="cs_cart_table_close"><i class="fa-solid fa-xmark"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="cs_height_5 cs_height_lg_5"></div>
        <div class="cs_cart_offer">
          <div>
            <form action="#" class="cs_coupon_doce_form">
              <input type="text" placeholder="Coupon Code">
              <button class="cs_btn cs_style_1 cs_heading_bg cs_semibold">
                <span class="cs_btn_text">Apply Coupon</span></button>
            </form>
          </div>
          <div>
            <button class="cs_btn cs_style_1 cs_accent_bg cs_bold"><span class="cs_btn_text">Update Cart</span></button>
          </div>
        </div>
      </div>
      <div class="col-xl-4">
        <div class="cs_shop_side_spacing">
          <form action="checkout.html" class="cs_shop_card">
            <h2>Cart Totals</h2>
            <table class="cs_heading_font">
              <tbody>
                <tr>
                  <td class="cs_medium cs_heading_color">Subtotal</td>
                  <td class="cs_medium text-end">$605.00</td>
                </tr>
                <tr>
                  <td class="cs_medium cs_heading_color">Total</td>
                  <td class="cs_medium text-end">$605.00</td>
                </tr>
              </tbody>
            </table>
            <div class="cs_height_30 cs_height_lg_30"></div>
            <button class="cs_btn cs_style_1 cs_accent_bg cs_bold w-100"><span class="cs_btn_text">Procced To
                Checkout</span></button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <!-- End Cart Section -->
@endsection
