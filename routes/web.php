<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\ImageDestinationController;
use App\Http\Controllers\Admin\SubregionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CountryController;



use App\Http\Controllers\FrontController;










Route::get('/', [FrontController::class,'index'])->name('welcome');
Route::get('/destinations/{destination}', [FrontController::class , 'destination'])->name('destination');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');
Route::resource('admin/destinations',DestinationController::class)->middleware('auth')->names('admin.destinations');
Route::resource('admin/imagedestinations',ImageDestinationController::class)->middleware('auth')->names('admin.imagedestinations');
Route::resource('admin/subregions',SubregionController::class)->middleware('auth')->names('admin.subregions');
Route::resource('admin/categories',CategoryController::class)->middleware('auth')->names('admin.categories');
Route::resource('admin/countries',CountryController::class)->middleware('auth')->names('admin.countries');


Route::get('get-subregions',[CountryController::class,'getSubregions'])->name('getsubregions');
