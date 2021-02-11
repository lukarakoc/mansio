<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Redirect;
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

Route::get("/", "WebsiteController@indexView");
Route::get("/about", "WebsiteController@aboutView");
Route::get('/faq', 'WebsiteController@faqView');
Route::get("/press", "WebsiteController@pressView");
Route::get("/contact", "WebsiteController@contactView");


Route::get("/photography", "WebsiteController@photographyView");
Route::get("/video", "WebsiteController@videoView");
Route::get("/architecture", "WebsiteController@architectureView");
Route::get('/architecture/{name}', 'WebsiteController@singleArchitectureView');

Route::get('/video/{name}', 'WebsiteController@singleVideoView');
Route::post('/send-email', 'WebsiteController@sendEmail');

Route::get('/back', function () {
    return redirect();
});

Route::get("/rKvJFeeTypiw3Z38bmEm", function () {
   Artisan::call('down');
});

Route::get('/BZ48z2J5C1UwfYxvwmwD', function () {
    Artisan::call('up');
});

