<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppsController;

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
})->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::post('/apps-post', 'App\Http\Controllers\AppsController@addNew')->name('appspost');
Route::get('/apps-post-delete/{id}', 'App\Http\Controllers\AppsController@delete')->name('appsdelete');
Route::get('/apps-post-active/{id}', 'App\Http\Controllers\AppsController@active')->name('appsactive');
Route::get('/Privacy-Policy', 'App\Http\Controllers\AppsController@PrivacyPolicy')->name('PrivacyPolicy');
Route::get('/Terms-And-Conditions', 'App\Http\Controllers\AppsController@Terms')->name('Terms');
Route::get('/Contact-Us', 'App\Http\Controllers\AppsController@ContactUs')->name('ContactUs');
Route::post('/Contact-Us', 'App\Http\Controllers\ContactController@ContactUsPost')->name('ContactUs');
Route::get('/Contact-Us/delete/{id}', 'App\Http\Controllers\ContactController@ContactUsDelete')->name('ContactUsDelete');
