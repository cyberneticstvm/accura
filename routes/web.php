<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::middleware(['web'])->group(function () {
    Route::prefix('ajax')->controller(AjaxController::class)->group(function () {
        Route::get('/product/details/{pid}', 'getProduct')->name('get.product');
    });
});
