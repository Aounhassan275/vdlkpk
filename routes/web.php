<?php

use Illuminate\Support\Facades\Artisan;
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

/******************ADMIN PANELS ROUTES****************/
Route::group(['prefix' => 'admin', 'as'=>'admin.','namespace' => 'Admin'], function () {
 
    /*******************LOGIN ROUTES*************/
    Route::view('login', 'admin.auth.index')->name('login');
    Route::post('login','AuthController@login');

    Route::group(['middleware' => 'auth:admin'], function () { 
    /*******************Logout ROUTES*************/       
    Route::get('logout','AuthController@logout')->name('logout');
    /*******************Dashoard ROUTES*************/
    Route::view('dashboard', 'admin.dashboard.index')->name('dashboard.index');
    /******************ADMIN ROUTES****************/
      Route::resource('admin', 'AdminController');    
    /******************SLIDER ROUTES****************/
      Route::resource('slider', 'SliderController');
    /******************FORM ROUTES****************/
    /******************LICENSE ROUTES****************/
      Route::resource('license', 'LicenseController');
    /******************FORM ROUTES****************/
      Route::resource('form', 'FormController');  
    /******************SETTING ROUTES****************/
      Route::resource('setting', 'SettingController');  
           /******************MESSAGE ROUTES****************/
     Route::resource('message', 'MessageController');  
          /******************Email ROUTES****************/
    Route::resource('email', 'EmailController');
    /*******************Profile ROUTES*************/
    Route::view('profile', 'admin.profile.index')->name('profile.index');
  });
});


/******************FRONTEND ROUTES****************/
Route::get('/', 'HomeController@home');
Route::get('how_to_apply', 'HomeController@how_to_apply');
Route::get('contact_us', 'HomeController@contact_us');
Route::get('download', 'HomeController@download');
Route::get('verify_license', 'HomeController@verifyLicense');
Route::post('message_store', 'HomeController@MessageStore');
Route::get('download_form/{id}', 'HomeController@DownloadForm');
/******************FUNCTIONALITY ROUTES****************/
Route::get('/cd', function() {
    Artisan::call('config:cache');
    Artisan::call('migrate');
    // Artisan::call('db:seed', [ '--class' => DatabaseSeeder::class]);
    Artisan::call('view:clear');
    return 'DONE';
});

