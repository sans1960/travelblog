<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\ImageDestinationController;
use App\Http\Controllers\Admin\SubregionController;
use App\Http\Controllers\Admin\CategoryController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');
Route::resource('admin/destinations',DestinationController::class)->middleware('auth')->names('admin.destinations');
Route::resource('admin/imagedestinations',ImageDestinationController::class)->middleware('auth')->names('admin.imagedestinations');
Route::resource('admin/subregions',SubregionController::class)->middleware('auth')->names('admin.subregions');
Route::resource('admin/categories',CategoryController::class)->middleware('auth')->names('admin.categories');
