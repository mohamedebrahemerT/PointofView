<?php


Route::group(['namespace'=>'Admin'],function(){

    

Route::get('/admin_login','AdminController@viwlogin');
Route::get('/admin','AdminController@viwlogin');
Route::post('/admin_login','AdminController@admin_login');
  

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

Route::resource('department', 'DepartmentController');
Route::get('department/{id}/destroy', 'DepartmentController@destroy');

Route::get('department_arrange', 'DepartmentController@arrange');

    Route::post('post-sortable','DepartmentController@sortable');




Route::resource('OurGallery', 'OurGalleryController');
Route::get('OurGallery/{id}/destroy', 'OurGalleryController@destroy');


Route::resource('Photocategories', 'PhotocategoriesController');
Route::get('Photocategories/{id}/destroy', 'PhotocategoriesController@destroy');



Route::resource('ACourses', 'CoursesController');
Route::get('ACourses/{id}/destroy', 'CoursesController@destroy');

Route::resource('news', 'newsController');
Route::get('news/{id}/destroy', 'newsController@destroy');

Route::resource('carreers', 'carreerController');
Route::get('carreers/{id}/destroy', 'carreerController@destroy');



Route::resource('ourteams', 'ourteamController');
Route::get('ourteams/{id}/destroy', 'ourteamController@destroy');



Route::resource('values', 'OurValuesController');
Route::get('values/{id}/destroy', 'OurValuesController@destroy');


Route::resource('development_cycle', 'developmentcycleController');
Route::get('development_cycle/{id}/destroy', 'developmentcycleController@destroy');

Route::resource('Fieldwork_administration', 'FieldworkadministrationController');
Route::get('Fieldwork_administration/{id}/destroy', 'FieldworkadministrationController@destroy');


 Route::resource('Resources_capabilities', 'ResourcescapabilitiesController');
Route::get('Resources_capabilities/{id}/destroy', 'ResourcescapabilitiesController@destroy');


Route::resource('quality_control', 'QualityController');
Route::get('quality_control/{id}/destroy', 'QualityController@destroy');


 Route::resource('Sectors_OF_expertise', 'SectorsOFexpertiseController');
Route::get('Sectors_OF_expertise/{id}/destroy', 'SectorsOFexpertiseController@destroy');

 Route::resource('our_partners', 'ourpartnersController');
Route::get('our_partners/{id}/destroy', 'ourpartnersController@destroy');

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
Route::get('subscriptions/{id}/destroy', 'subscriptionsController@destroy');

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



 
