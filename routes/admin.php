<?php


Route::group(['namespace'=>'Admin'],function(){

    Route::group(['middleware' => 'guest'], function () {

Route::get('/admin_login','AdminController@viwlogin');
Route::get('/admin','AdminController@viwlogin');
Route::post('/admin_login','AdminController@admin_login');
     });

// Forget Routes
        Route::post('admin/password/forget', 'Auth\ForgotPasswordController@forget');
        // Reset Routes
        Route::get('admin/password/reset/{token}', 'Auth\ResetPasswordController@renderReset');
        Route::post('admin/password/reset', 'Auth\ResetPasswordController@reset');

    Route::view('need/permission', 'admin.no_permission');
     
Route::group(['middleware' => 'admin:admin'], function () {
Route::get('/dashboard','AdminController@dashboard');
Route::get('Admin_logout', 'AdminController@Admin_logout_fun');
Route::resource('admins', 'AdminController');
Route::get('admins/{id}/destroy', 'AdminController@destroy');

Route::resource('users', 'UsersController');
Route::post('/users/actived', 'UsersController@update')->name('users.actived');
Route::get('/users/userscourses/{id}', 'UsersController@userscourses') ;

 
 
  
Route::resource('Sliders', 'SlidersController');
Route::get('Sliders/{id}/destroy', 'SlidersController@destroy');

Route::resource('Departments', 'DepartmentController');
Route::get('Departments/{id}/destroy', 'DepartmentController@destroy');

Route::resource('ACourses', 'CoursesController');
Route::get('ACourses/{id}/destroy', 'CoursesController@destroy');

Route::resource('news', 'newsController');
Route::get('news/{id}/destroy', 'newsController@destroy');

Route::resource('OurValues', 'OurValuesController');
Route::get('OurValues/{id}/destroy', 'OurValuesController@destroy');




Route::resource('Certificate', 'CertificatesController');
Route::get('Certificate/{id}/destroy', 'CertificatesController@destroy');


Route::resource('UserCourses', 'UserCoursesController');
Route::get('UserCourses/{id}/destroy', 'UserCoursesController@destroy');
Route::post('UserCoursesSatus', 'UserCoursesController@UserCoursesSatus');


Route::resource('UserCoursescertificate', 'UserCoursescertificateController');
Route::get('UserCoursescertificate/{id}/destroy', 'UserCoursescertificateController@destroy');

Route::post('UserCoursescertificateSatus', 'UserCoursescertificateController@UserCoursescertificateSatus');

 
 
 
Route::resource('ContactUs', 'ContactUsController');


Route::resource('subscriptions', 'subscriptionsController');
Route::get('Reports', 'ReportsController@index');
Route::post('search_user_name', 'ReportsController@search_user_name');

      Route::get('/AdminNotifications', 'AdminNotificationsController@index');
          Route::get('AdminNotifications/{id}/destroy', 'AdminNotificationsController@destroy');
 
 Route::get('/AdminNotifications/create', 'AdminNotificationsController@create')->name('.create');
            Route::post('/AdminNotifications/store', 'AdminNotificationsController@store')->name('.store');
            Route::get('/show/{slug}', 'AdminNotificationsController@show')->name('.show');
            Route::post('/delete', 'AdminNotificationsController@delete')->name('.delete');
            Route::post('/delete-multi', 'AdminNotificationsController@deleteMulti')->name('.deleteMulti');



Route::get('Settings/edit', 'SettingsController@edit');
Route::post('Settings/update', 'SettingsController@update');
 
Route::resource('roles', 'rolesController');
Route::get('roles/{id}/destroy', 'rolesController@destroy');
Route::get('roles/addpermissions/{Role_id}', 'rolesController@addpermissions');
Route::post('roles/addpermissions', 'rolesController@addpermissionsPOST');
 
Route::resource('AdminGroup', 'AdminGroupController');
                         

    });

});



 
