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

Route::post('/contact', [App\Http\Controllers\HomeController::class, 'contact']);

Route::prefix('admin')->group(function () {
    Route::resource('banner', 'App\Http\Controllers\Admin\BannerController');
    Route::get('/banner/img/{banner}/delete', [App\Http\Controllers\Admin\BannerController::class, 'deleteImage']);
});
