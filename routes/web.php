<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/paneles', [App\Http\Controllers\HomeController::class, 'paneles'])->name('paneles');
Route::get('/camaras', [App\Http\Controllers\HomeController::class, 'camaras'])->name('camaras');
Route::get('/computacion', [App\Http\Controllers\HomeController::class, 'computacion'])->name('computacion');

Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contact']);

Route::prefix('admin')->group(function () {
    Route::resource('banner', 'App\Http\Controllers\Admin\BannerController');
    Route::get('/banner/img/{banner}/delete', [App\Http\Controllers\Admin\BannerController::class, 'deleteImage']);
    Route::get('/banner/{banner}/delete', [App\Http\Controllers\Admin\BannerController::class, 'destroy']);

    Route::resource('product', 'App\Http\Controllers\Admin\ProductController');
    Route::get('/product/img/{product}/delete', [App\Http\Controllers\Admin\ProductController::class, 'deleteImage']);
    Route::get('/product/{product}/delete', [App\Http\Controllers\Admin\ProductController::class, 'destroy']);
});
