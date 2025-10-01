<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dental', [HomeController::class, 'dental'])->name('dental');
Route::get('/eye-care', [HomeController::class, 'eyecare'])->name('eye-care');
Route::get('/rehabilitations', [HomeController::class, 'rehabilitations'])->name('rehabilitations');
Route::get('/physiotherapy', [HomeController::class, 'physiotherapy'])->name('physiotherapy');
Route::get('/psychology', [HomeController::class, 'psychology'])->name('psychology');
Route::get('/doctors', [HomeController::class, 'doctor'])->name('doctors');
Route::get('/doctor-details', [HomeController::class, 'doctorDetails'])->name('doctor-details');
Route::get('/about', [HomeController::class, 'About'])->name('about');
Route ::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');
Route::get('/department', [HomeController::class, 'department'])->name('department');
Route::get('/department-details', [HomeController::class, 'department-details'])->name('department-details');
Route::get('/case-studies', [HomeController::class, 'CaseStudies'])->name('case-studies');
Route::get('/case-studies-details', [HomeController::class, 'CaseStudiesDetails'])->name('case-studies-details');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/elements', [HomeController::class, 'elements'])->name('elements');
Route::get('/service-details', [HomeController::class, 'ServiceDetails'])->name('service-details');
Route::get('/pricing-plan', [HomeController::class, 'PricingPlan'])->name('pricing-plan');
Route::get('/gallery', [HomeController::class, 'Gallery'])->name('gallery');
Route::get('/working-process', [HomeController::class, 'WorkingProcess'])->name('working-process');
Route::get('/before-after', [HomeController::class, 'BeforeAfter'])->name('before-after');
Route::get('/products', [HomeController::class, 'products'])->name('products');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('shop-details', [HomeController::class, 'ShopDetails'])->name('shop-details');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog-with-sidebar', [HomeController::class, 'BlogWithSidebar'])->name('blog-with-sidebar');
Route::get('/blog-details', [HomeController::class, 'Blogdetails'])->name('blog-details');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



