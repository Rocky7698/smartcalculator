<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ToolController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SitemapController;

Route::get('/', [HomeController::class, 'index']);

Route::view('/about-us', 'pages.about');
Route::view('/privacy-policy', 'pages.privacy');
Route::view('/terms-conditions', 'pages.terms');
Route::view('/contact-us', 'pages.contact');

// Route::get('/sitemap.xml', [SitemapController::class, 'index']);

Route::get('/{slug}', [ToolController::class, 'show']);
