@extends('layouts.app')
@section('content')
  <!-- Start Page Header -->
  <section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
    <div class="container">
      <div class="cs_page_heading_in">
        <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">Checkout</h1>
        <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
          <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
          <li class="breadcrumb-item active">Checkout</li>
        </ol>
      </div>
    </div>
  </section>
  <!-- End Page Header -->
  <!-- Start Checkout Section -->
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row">
      <div class="col-xl-7">
        <p class="cs_checkout_alert cs_heading_font m-0">Have a coupon? <a href="">Click here to enter your code</a></p>
        <div class="cs_height_40 cs_height_lg_40"></div>
        <h2 class="cs_checkout-title cs_fs_40">Billing Details</h2>
        <div class="cs_height_45 cs_height_lg_40"></div>
        <div class="row">
          <div class="col-lg-6">
            <label class="cs_shop_label cs_medium cs_heading_color">First Name *</label>
            <input type="text" class="cs_shop_input">
          </div>
          <div class="col-lg-6">
            <label class="cs_shop_label cs_medium cs_heading_color">Last Name *</label>
            <input type="text" class="cs_shop_input">
          </div>
          <div class="col-lg-12">
            <label class="cs_shop_label cs_medium cs_heading_color">Company name (optional)</label>
            <input type="text" class="cs_shop_input">
          </div>
          <div class="col-lg-12">
            <label class="cs_shop_label cs_medium cs_heading_color">Country / Region *</label>
            <select class="cs_shop_input">
              <option value="States">United States (US)</option>
              <option value="Kingdom">United Kingdom</option>
              <option value="Kanada">Kanada</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="cs_shop_label cs_medium cs_heading_color">Street address *</label>
            <input type="text" class="cs_shop_input" placeholder="House number and street name">
            <input type="text" class="cs_shop_input" placeholder="Apartment, suite, unit, etc (optional) ">
          </div>
          <div class="col-lg-12">
            <label class="cs_shop_label cs_medium cs_heading_color">Town / City *</label>
            <input type="text" class="cs_shop_input">
          </div>
          <div class="col-lg-12">
            <label class="cs_shop_label cs_medium cs_heading_color">State *</label>
            <select class="cs_shop_input">
              <option value="California">California</option>
              <option value="Gercy">New Gercy</option>
              <option value="Daiking">Daiking</option>
            </select>
          </div>
          <div class="col-lg-12">
            <label class="cs_shop_label cs_medium cs_heading_color">ZIP Code *</label>
            <input type="text" class="cs_shop_input">
          </div>
          <div class="col-lg-12">
            <label class="cs_shop_label cs_medium cs_heading_color">Phone *</label>
            <input type="text" class="cs_shop_input">
          </div>
          <div class="col-lg-12">
            <label class="cs_shop_label cs_medium cs_heading_color">Email address *</label>
            <input type="text" class="cs_shop_input">
          </div>
        </div>
        <div class="cs_height_45 cs_height_lg_45"></div>
        <h2 class="cs_checkout_title">Additional information</h2>
        <div class="cs_height_30 cs_height_lg_30"></div>
        <label class="cs_shop_label cs_medium cs_heading_color">Order notes (optional)</label>
        <textarea cols="30" rows="6" class="cs_shop_input mb-0"></textarea>
      </div>
      <div class="col-xl-5">
        <div class="cs_shop_side_spacing">
          <div class="cs_shop_card">
            <h2>Your order</h2>
            <table>
              <tbody>
                <tr class="cs_medium cs_heading_color">
                  <td>Products</td>
                  <td class="text-end">Amount</td>
                </tr>
                <tr>
                  <td>Awesome men T-shirt x 1</td>
                  <td class="text-end">$20.00</td>
                </tr>
                <tr>
                  <td>Future AI robot toy x 1</td>
                  <td class="text-end">$550.00</td>
                </tr>
                <tr>
                  <td>Hemp seed shampoo x 1</td>
                  <td class="text-end">$35.00</td>
                </tr>
                <tr>
                  <td>Subtotal</td>
                  <td class="text-end">$605.00</td>
                </tr>
                <tr class="cs_medium cs_heading_color">
                  <td>Total</td>
                  <td class="text-end">$605.00</td>
                </tr>
              </tbody>
            </table>
            <div class="cs_height_30 cs_height_lg_30"></div>
            <button class="cs_btn cs_style_1 cs_semibold cs_accent_bg w-100"><span class="cs_btn_text">Procced To
                Checkout</span></button>
          </div>
          <div class="cs_height_50 cs_height_lg_30"></div>
          <div class="cs_shop_card">
            <h2>Payment</h2>
            <table>
              <tbody>
                <tr>
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label m-0">
                        Cash on delivery
                      </label>
                    </div>
                    <p class="m-0 cs_payment_text">Pay with cash upon delivery.</p>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="cs_height_25 cs_height_lg_25"></div>
            <p class="m-0 cs_payment_text">Your personal data will be used to process your order, support your
              experience throughout this website, and for other purposes described in our <a href="">privacy policy</a>.
            </p>
            <div class="cs_height_20 cs_height_lg_20"></div>
            <button class="cs_btn cs_style_1 cs_semibold cs_heading_bg w-100"><span class="cs_btn_text">Place
                Order</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_50"></div>
  <!-- End Checkout Section -->
@endsection
