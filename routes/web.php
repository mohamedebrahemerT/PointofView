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
Route::group(['namespace' => 'Forentend'], function () {


Route::get('/','homeController@index');
Route::get('/aboutus','homeController@aboutus');
//Route::get('/blog','homeController@blog');
Route::get('/contactus','homeController@contactus');
Route::get('/Department/{id}','homeController@getcourses');
//Route::get('/blog/{id}','homeController@getblog');
Route::get('/course/{id}','homeController@getcourse');
Route::get('/coursemore/{id}','homeController@coursemore');

Route::post('/contact-form','homeController@contactform');
Route::get('/login','homeController@login');
Route::post('/login','homeController@post_login');
Route::post('/register','homeController@register');
Route::get('/search','homeController@search');
Route::post('/subs','homeController@subscriptions');
Route::get('/home','homeController@home');
Route::post('/update_user','homeController@update_user');
Route::get('/registercourse/{id}','homeController@registercourse');
Route::post('/register-form','homeController@registerform');
Route::get('/certificate/{id}','homeController@certificate');
Route::get('/certificateadmin/{id}','homeController@certificateadmin');

Route::get('/certificate/pdf/{id}','homeController@certificatePDF');
Route::get('/logout','homeController@logout');


   // Reset Routes
        Route::get('password/forget', 'homeController@passwordforget');

 Route::post('password/forget', 'homeController@forget');

        Route::get('password/reset/{token}', 'homeController@renderReset');
        Route::post('password/reset', 'homeController@reset');


    Route::group(['middleware' => 'guest'], function () {
        Route::get('/login', 'homeController@login')->name('login');
        Route::post('/login', 'homeController@post_login');
        Route::post('/register', 'homeController@register');
    });

    Route::get('/', 'homeController@index');
    Route::get('/aboutus', 'homeController@aboutus');
    Route::get('/blog', 'homeController@blog');
    Route::get('/contactus', 'homeController@contactus');
    Route::get('/Department/{id}', 'homeController@getcourses');
    Route::get('/blog/{id}', 'homeController@getblog');
    Route::get('/course/{id}', 'homeController@getcourse');
    Route::post('/contact-form', 'homeController@contactform');
    Route::get('/search', 'homeController@search');
    Route::post('/subscriptions', 'homeController@subscriptions');
    Route::get('/registercourse/{id}', 'homeController@registercourse');
    Route::post('/register-form', 'homeController@registerform');
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/logout', 'homeController@logout');
        Route::get('/home', 'homeController@home');
        Route::post('/update_user', 'homeController@update_user');

        Route::get('/RequestCertificates/{Course_id}/{user_id}', 'homeController@RequestCertificates');
        
        Route::post('/RequestCertificates', 'homeController@RequestCertificatespost');


    });

    Route::get('my-form','homeController@myform');

Route::post('my-form','homeController@myformPost')->name('my.form');
});
