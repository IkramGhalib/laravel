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

Route::get('/', function () {
    return view('welcome');
});
Route::get('message',[App\Http\Controllers\HomeController::class,'index'])->name('message');
Route::post('customer-store',[App\Http\Controllers\HomeController::class,'store'])->name('customer-store');
// edit form route
Route::post('customer-update/{id}',[App\Http\Controllers\HomeController::class,'update'])->name('customer-update');
// load form in view blade
Route::get('customer',[App\Http\Controllers\HomeController::class,'customer'])->name('customer');

// get data route
Route::get('customer_edit/{id}',[App\Http\Controllers\HomeController::class,'customer_edit'])->name('customer_edit');
// localization route
Route::get('locale', function () {
    return view('home');
});

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

// mail routes
Route::get('send-email', [App\Http\Controllers\HomeController::class, 'email'])->name('send-email');
