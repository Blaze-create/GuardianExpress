<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;

Route::get('/', [AppController::class, 'home'])->name('home');
Route::get('/shop', [AppController::class, 'shop'])->name('shop');

Route::get('/report', [AppController::class, 'report'])->name('report')->middleware('auth');
Route::post('/report/getreport', [AppController::class, 'getReport'])->name('getReport')->middleware('auth');

Route::get('/shop/checkout/{package}', [AppController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::post('/shop/confirmOrder/{lol}', [AppController::class, 'SaveOrder'])->name('SaveOrder')->middleware('auth');
Route::get('comingsoon', [AppController::class, 'coming'])->name('soon');

Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle']);

Route::fallback(function () {
    return view('errors.404');
});

Auth::routes();



// ADMIN ROUTE
Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard')->middleware('auth');

Route::post('admin/suspend/{id}', [AdminController::class, 'suspend'])->name('suspend')->middleware('auth');
Route::delete('admin/deleteUser/{id}', [AdminController::class, 'destroyUser'])->name('destroyUser')->middleware('auth');
Route::post('admin/makeadmin/{id}', [AdminController::class, 'makeadmin'])->name('makeadmin')->middleware('auth');
Route::post('admin/removeadmin/{id}', [AdminController::class, 'removeadmin'])->name('removeadmin')->middleware('auth');

Route::post('admin/complete/{id}', [AdminController::class, 'completeOrder'])->name('completeOrder')->middleware('auth');
Route::delete('admin/deleteOrder/{id}', [AdminController::class, 'destroyOrder'])->name('destroyOrder')->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
