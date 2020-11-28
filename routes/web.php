<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', 'PagesController@home')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/courses', 'PagesController@courses')->name('courses');
Route::get('/course/mechanical', 'PagesController@mechanical')->name('mechanical');
Route::get('/course/civil', 'PagesController@civil')->name('civil');
Route::get('/course/programming', 'PagesController@programming')->name('programming');
Route::get('/enquiry/{course}', 'PagesController@enquiry')->name('enquiry');
Route::post('/course-enquiry', 'PagesController@enquiryMail')->name('enquiry.mail');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/send', 'PagesController@sendMail')->name('send.mail');

// Clear
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return "Cache is cleared";
}); 