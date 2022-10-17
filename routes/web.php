<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\ImageDestinationController;
use App\Http\Controllers\Admin\SubregionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\SightController;
use App\Http\Controllers\Admin\GeneralContactController;
use App\Http\Controllers\Admin\DestinationContactController;
use App\Http\Controllers\Admin\ListContactController;
use App\Http\Controllers\Admin\PageContactController;




use App\Http\Controllers\FrontController;










Route::get('/', [FrontController::class,'index'])->name('welcome');
Route::get('/destinations/{destination}', [FrontController::class , 'destination'])->name('destination');
Route::get('/pages/{page}', [FrontController::class , 'page'])->name('page');
Route::get('/sights/{sight}', [FrontController::class , 'sight'])->name('sight');
Route::get('taylor-made-trips', [FrontController::class , 'taylor'])->name('taylor');
Route::get('taylor-made-trips/contact', [FrontController::class , 'contactgeneral'])->name('contactgeneral');
Route::get('contact/destination/{destination}', [FrontController::class , 'contactDestination'])->name('contactdestination');
Route::get('contact/page/{page}', [FrontController::class , 'contactPage'])->name('contactpage');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth')->name('admin');
Route::resource('admin/destinations',DestinationController::class)->middleware('auth')->names('admin.destinations');
Route::resource('admin/imagedestinations',ImageDestinationController::class)->middleware('auth')->names('admin.imagedestinations');
Route::resource('admin/subregions',SubregionController::class)->middleware('auth')->names('admin.subregions');
Route::resource('admin/categories',CategoryController::class)->middleware('auth')->names('admin.categories');
Route::resource('admin/countries',CountryController::class)->middleware('auth')->names('admin.countries');
Route::resource('admin/tags',TagController::class)->middleware('auth')->names('admin.tags');
Route::resource('admin/pages',PageController::class)->middleware('auth')->names('admin.pages');
Route::resource('admin/articles',ArticleController::class)->middleware('auth')->names('admin.articles');
Route::resource('admin/sights',SightController::class)->middleware('auth')->names('admin.sights');
Route::resource('admin/contactos-general',GeneralContactController::class)->names('contactos.general');
Route::resource('admin/contactos-destinations',DestinationContactController::class)->names('contactos.destination');
Route::resource('admin/contactos-list',ListContactController::class)->names('contactos.list');
Route::resource('admin/contactos-page',PageContactController::class)->names('contactos.page');


Route::get('get-subregions',[CountryController::class,'getSubregions'])->name('getsubregions');
Route::get('get-countries',[CountryController::class,'getCountries'])->name('getcountries');
