<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;



        ###################### admin-profile ##############################
       
Auth::routes();


Route::get('doctor-login', 'Auth\UserLoginController@doctorLogin')->name('doctor-login');
Route::post('doctorlogin', 'Auth\UserLoginController@LoginDoctor')->name('doctorlogin');


  Route::post('signoutdoctors', 'Auth\UserLoginController@signOutDoctors')->name('signoutdoctors');
  
  // Route::get('create/acount', 'Auth\RegisterController@registerUser')->name('create.acount');
  // Route::post('create/acount', 'Auth\RegisterController@registerNewUser')->name('create.acount');

  Route::get('doctor-signup', 'Auth\RegisterDoctorController@registerUser')->name('doctor-signup');
  Route::post('doctor-signup', 'Auth\RegisterDoctorController@registerNewUser')->name('doctor-signup');



  Route::get('doctor/forgot-password', 'Auth\RegisterDoctorController@forgotPassword')->name('doctor-forgot-password');;
  Route::post('doctor/forgot-password', 'Auth\RegisterDoctorController@submitForgot')->name('doctor.forgot-password.post');

  Route::get('doctor/reset-password/{token}', 'Auth\RegisterDoctorController@resetUserPasswordGet')->name('doctor-reset-password');
  Route::post('doctor/reset-password', 'Auth\RegisterDoctorController@resetUserPasswordPost')->name('doctor.reset-password.post');
  // 'middleware' => 'CheckDoctorDashboard',
  Route::group(['middleware' => 'checkDoctorDashboard','namespace' => 'Doctors','prefix' => 'doctor'], function () {

    // Route::get('doctornotifaction', 'NotifacationController@instructornotifaction')->name('doctornotifaction');
    // Route::post('doctor_notifaction', 'NotifacationController@send_notifaction')->name('doctor_notifaction');

    Route::get('getSubCategory/{id}','ServiceController@getSubCategory');
    // Route::get('getchildcategory/{id}','BookController@getChildCategory');

    Route::resource('dashboard','DashBoardController');
    Route::resource('services','ServiceController');
    // Route::resource('orders','OrderController');

    Route::get('doctor-orders','OrderController@index')->name('doctor-orders');
    Route::get('order-details/{orderId}','OrderController@orderDetails')->name('order-details');
    Route::get('banks', 'BankController@index');

    Route::resource('educations','EducationController');
    Route::resource('experiences','ExperienceController');
    Route::resource('educations','EducationController');
    Route::resource('licenses','LicenseController');
    Route::resource('insurances','InsuranceController');
    Route::resource('languages','LanguageController');
    Route::resource('work_days','WorkDaysController');


    Route::get('profile', 'ProfileController@index');
    Route::get('bankdetails', 'ProfileController@bankDetails');
    Route::post('bankdetails','ProfileController@updateBankDetails')->name('bankdetails');
    Route::get('getcity/{id}', 'ProfileController@getCity');

    Route::post('profile/update','ProfileController@updateProfile');
    Route::post('user/changepassword', 'ProfileController@changePassword')->name('user.changepassword');
     Route::get('agreements', 'ProfileController@agreements')->name('agreements');        
  }); 

