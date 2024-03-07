<?php

use Illuminate\Support\Facades\Route;
use PhongTran\Nails\Http\Controllers\GalleryController;
use PhongTran\Nails\Http\Controllers\AboutUsController;
use PhongTran\Nails\Http\Controllers\BookingController;
use PhongTran\Nails\Http\Controllers\ContactController;
use PhongTran\Nails\Http\Controllers\CouponController;
use PhongTran\Nails\Http\Controllers\HomeController;
use PhongTran\Nails\Http\Controllers\ServiceController;

Route::get('/{theme}',[HomeController::class, 'index'])->name('home');
Route::get('/{theme}/about-us',[AboutUsController::class, 'index'])->name('about');
Route::get('/{theme}/service',[ServiceController::class, 'index'])->name('service');
Route::get('/{theme}/gallery',[GalleryController::class, 'index'])->name('gallery');
Route::get('/{theme}/coupons',[CouponController::class, 'index'])->name('coupons');
Route::get('/{theme}/booking',[BookingController::class, 'index'])->name('booking');
Route::get('/{theme}/contact',[ContactController::class, 'index'])->name('contact');