<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

// هن اللوجن مش شغاله عشان ملف الروت الجديد لا يعم مع اللوجن


		// Route::get('departments/{id}/edit', 'DocumentController@edit');
		// Route::get('departments', 'DocumentController@update');
		Route::get('files/create', 'DocumentController@create');
		Route::post('files', 'DocumentController@store');
		Route::get('files', 'DocumentController@index');

		Route::post('files/{id}', 'DocumentController@show');
		Route::post('file/download/{file}', 'DocumentController@download');



Route::get('/dddddswtrw', function () {
    return "iuhiuhhkj";
});

Route::get('prooooo', 'Vendors\ProductController@index');


// start livewire route

	// Route::view('booksss','livewire.index');

// end livewire route


 ###################### user-status ##############################
        // Route::post('users/status/{id}', 'UsersController@updateStatus')->name('users/status/{id}');

        ###################### admin-profile ##############################
       
Auth::routes();

Route::get('user-login', 'Auth\UserLoginController@UserLogin')->name('user-login');
Route::post('userlogin', 'Auth\UserLoginController@LoginUser')->name('userlogin');

Route::get('doctor-login', 'Auth\UserLoginController@doctorLogin')->name('doctor-login');
Route::post('doctorlogin', 'Auth\UserLoginController@LoginDoctor')->name('doctorlogin');


  // Route::post('signoutotudent', 'Auth\UserLoginController@signOutStudent')->name('signoutotudent');
  Route::post('signoutinstructors', 'Auth\UserLoginController@signOutInstructors')->name('signoutinstructors');

  
  // Route::get('create/acount', 'Auth\RegisterController@registerUser')->name('create.acount');
  // Route::post('create/acount', 'Auth\RegisterController@registerNewUser')->name('create.acount');

  Route::get('create_vendor', 'Auth\RegisterVendorController@registerUser')->name('create_vendor');
  Route::post('create_vendor', 'Auth\RegisterVendorController@registerNewUser')->name('create_vendor');


  Route::get('vendor/forgot-password', 'Auth\RegisterVendorController@forgotPassword')->name('vendor-forgot-password');;
  Route::post('vendor/forgot-password', 'Auth\RegisterVendorController@submitForgot')->name('vendor.forgot-password.post');

  Route::get('vendor/reset-password/{token}', 'Auth\RegisterVendorController@resetUserPasswordGet')->name('vendor-reset-password');
  Route::post('vendor/reset-password', 'Auth\RegisterVendorController@resetUserPasswordPost')->name('vendor.reset-password.post');

Route::group(['middleware' => 'checkVendor','namespace' => 'Vendors','prefix' => 'vendors'], function () {

    
    // Route::get('login/user', 'Auth\UserLoginController@UserLogin')->name('login.user');

    Route::get('instructornotifaction', 'NotifacationController@instructornotifaction')->name('instructornotifaction');
    Route::post('instructor_notifaction', 'NotifacationController@send_notifaction')->name('instructor_notifaction');
  
	  Route::get('getSubCategory/{id}','BookController@getSubCategory');
  	Route::get('getchildcategory/{id}','BookController@getChildCategory');

    Route::resource('products','ProductController');

    Route::get('product-size-edit/{id}','ProductController@productSizeEdit');
    Route::get('product-size-update/{id}','ProductController@productSizeUpdate');

    Route::get('product-color-edit/{id}','ProductController@productColorEdit');
    Route::get('product-color-update/{id}','ProductController@productColorUpdate');


    Route::resource('dashboard','DashBoardController');

    Route::get('banks', 'BankController@index');
    
    Route::get('vendor-orders','OrderController@index')->name('vendor-orders');
    Route::get('order-details/{orderId}','OrderController@orderDetails')->name('order-details');

    

    Route::get('report/sales','ReportController@sales');
    Route::get('report/transfers','ReportController@transfers');
    Route::get('report/statistics','ReportController@statistics');
   	Route::get('getbook/{id}', 'BookController@getbook');

    Route::get('profile', 'ProfileController@index');
    Route::get('bankdetails', 'ProfileController@bankDetails');
    Route::post('bankdetails','ProfileController@updateBankDetails')->name('bankdetails');
   	Route::get('getcity/{id}', 'ProfileController@getCity');

    Route::post('profile/update','ProfileController@updateProfile');
    Route::post('user/changepassword', 'ProfileController@changePassword')->name('user.changepassword');
	Route::get('agreements', 'ProfileController@agreements')->name('agreements');	    	
});	
