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
Route::get('/aboutus','aboutusController@aboutus');

Route::get('/team','pagesController@team');
Route::get('/Values','pagesController@OurValues');
Route::get('/Values/{id}','pagesController@singleValues');

Route::get('/devcycle','pagesController@devcycle');
Route::get('/devcycle/{id}','pagesController@singledevcycle');


Route::get('/Fieldadministration','pagesController@Fieldadministration');
Route::get('/Fieldadministration/{id}','pagesController@singleFieldadministration');

Route::get('/Rescapabilities','pagesController@Rescapabilities');
Route::get('/Rescapabilities/{id}','pagesController@singleRescapabilities');

Route::get('/Qualitycontrol','pagesController@Qualitycontrol');
Route::get('/Qualitycontrol/{id}','pagesController@singleQualitycontrol');


Route::get('/Services','Servicescontroller@index');
Route::get('/childScopeofresearch/{id}','Servicescontroller@childScopeofresearch');
Route::get('/Services/{id}','Servicescontroller@Service');

Route::get('/Gallery','Gallerycontroller@index');
Route::get('/Carreerweb','Carreercontroller@index');
Route::get('/Carreerweb/{id}','Carreercontroller@singlecarreer');
Route::get('/contactus','homeController@contactus');
Route::post('/subs','homeController@subscriptions');
Route::post('/contact-form','homeController@contactform');



//Route::get('/blog','homeController@blog');

/*

//Route::get('/blog/{id}','homeController@getblog');
Route::get('/course/{id}','homeController@getcourse');
Route::get('/coursemore/{id}','homeController@coursemore');


Route::get('/login','homeController@login');
Route::post('/login','homeController@post_login');
Route::post('/register','homeController@register');
Route::get('/search','homeController@search');

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

*/
});
