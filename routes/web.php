<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::prefix('ajax')->controller(AjaxController::class)->group(function () {
        Route::get('/product/details/{pid}', 'getProduct')->name('get.product');
    });

    Route::prefix('')->controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/sitemap.xml', 'sitemap')->name('sitemap');
        Route::get('/robots.txt', 'robots')->name('robots');
    });
});
