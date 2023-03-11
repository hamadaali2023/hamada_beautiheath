<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|wedewdew
*/

/*****************ADMIN ROUTES*******************/
      
       
use App\Events\MessageSent;
use App\User;
use App\Post;
use App\Patient;
use App\Doctor;
use App\Vendor;
Route::get('/vendor/activation/{token}', 'UserController@vendorActivation');
Route::get('/doctor/activation/{token}', 'UserController@doctorActivation');
Route::get('/patient/activation/{token}', 'UserController@patientActivation');
Route::get('/activated', function () {
    return view('emails.activated');
});
// Route::get('/welcom', function () {
//     return view('admin.welc');
// });

// Route::get('/testt', function () {
//     event(new App\Events\MyEvent('Welcomeeeeeeee '));
//     return 'event has been sent';
// });


// start notification 
        Route::get('/postnot', function () {
            // $user = Post::find(1);
            // $user->notify(new \App\Notifications\PostNewNotification());
            $user = Post::get();
            Notification::send($user, new \App\Notifications\PostNewNotification());
        });

        Route::get('/usernot', function () {
            $user = User::find(1);
            Notification::send($user, new \App\Notifications\UserNewNotification($user));
        });
        Route::get('/doctornot',function() {
            $user = Doctor::find(5);
            Notification::send($user, new \App\Notifications\DoctorNewNotification($user));
        });
        Route::get('/patientnot', function () {
    
            $user = Patient::find(1);
            Notification::send($user, new \App\Notifications\PatientNewNotification($user));

        });
        Route::get('/vendor-notttttt', function () {
            $vendor = Vendor::find(1);
            $vendor->notify(new \App\Notifications\VendorNewNotification(
                        5,
                        'welcome',
                        241
                    ));
        });
        Route::get('/getusernot', function () {
            $user = Patient::find(15);
            $notf=[];
            foreach ($user->notifications as $not) {
                // $not->notifications;
                // foreach ($not->notifications as $nott) {
                //     $not->notf=$not->data;
                // }
                $notf=$not->notifications;

            }
            // return Response::json($notf);

            // $user = Notification::get();

            // foreach ($user as $not) {
            //     $not->notf=$not->data;
            // }
            // return Response::json($user);


            // foreach ($user->readnotifications as $not) {
            //     var_dump($not->id);
            // }

            // foreach ($user->unreadnotifications as $not) {
            //     var_dump($not->id);
            // }
             // $notifications= Patient::with(array('unreadnotifications'=>function($query){
             //                            $query->markAsRead();
             //                        }))->get();
            foreach ($user->unreadnotifications as $not) {
                $not->markAsRead();
            }
            return redirect()->back(); 


            // $user->notifications()->delete();
            
        });

        Route::get('view/notification/{id}', 'DoctorController@getnots');
        Route::get('view/patient/notification/{id}', 'PatientController@getnots');

// end notification







// Route::resource('category','CategoryController');

 // Route::resource('specialities','SpecialityController');
// Route::get('admin/specialities', 'SpecialityController@index');
// Route::post('admin/specialities/store', 'SpecialityController@store');  // create Category
// Route::get('admin/specialities/{id}/delete', 'SpecialityController@destroy');  // create Category
// // Route::get('admin/specialities/{id}/edit', 'ServicesController@edit'); // edit page view
// Route::post('admin/specialities/update','SpecialityController@update');



// Route::get('/chats/{doctorId}', 'ChatsController@index');
// Route::get('/chats/{doctorId}/{chatID}', 'ChatsController@GetMessages');


Route::get('/chats', 'ChatsController@index');
Route::get('/messages', 'ChatsController@fetchAllMessages');
Route::post('/messages', 'ChatsController@sendMessage');


Route::get('send-mail', function () {    
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('hamadaali221133@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});


Route::get('dropdownlistt/{id}','DropdownController@index');
Route::get('get-state-list','DropdownController@getStateList');
Route::get('get-city-list','DropdownController@getCityList');

 
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
});


Route::get('/welll', function () {
    //broadcast(new MessageSent('some data'),3);

    return view('welll');
});

    Route::get('causes_cat/{id}', 'CauseController@index');
    Route::get('getsub/{id}', 'CauseController@GetSub');

    Route::get('all-doctor-orders','OrdersController@index')->name('all-doctor-orders');
    Route::get('all-doctor-order-details/{orderId}','OrdersController@orderDetails')->name('order-details');

    Route::get('all-vendor-orders','OrdersController@vendorOrders')->name('all-vendor-orders');
    Route::get('all-vendor-order-details/{orderId}','OrdersController@vendorOrderDetails');

    Route::resource('/admin/dashboard','DashBoardController');
    Route::resource('appointments','AppointmentController');
        Route::resource('doctors','DoctorController');
        Route::resource('reviews','ReviewsController');
        Route::resource('articles','ArticleController');
        Route::resource('pannars','BannerController');
        Route::resource('categories','CategoryController');
        Route::resource('subcategories','SubCategoryController');
        Route::resource('countries','CountryController');
        Route::resource('cities','CityController');
        // Route::resource('specialities','SpecialityController');
        Route::resource('userss','UsersController');
        // Route::resource('reviews','CommentController');
        Route::resource('contactinfo','ContactInfoController');
        Route::resource('days','DayController');
        Route::resource('offers','OfferController');
        Route::resource('patients','PatientController');
        Route::resource('sections','SectionController');
        Route::resource('sliders','SliderController');
        Route::resource('banks','BankController');


        
        
       
###### start doctor ########
        // Route::get('doctor-signup', 'Auth\RegisterDoctorController@registerUser')->name('doctor-signup');
        // Route::post('doctor-signup', 'Auth\RegisterDoctorController@registerNewUser')->name('doctor-signup');
        Route::get('doctornotifaction', 'DoctorController@doctornotifaction')->name('doctornotifaction');
        Route::post('doctor_notifaction', 'DoctorController@doctor_Notifaction')->name('doctor_notifaction');

        //  get profile and change status
        Route::get('doctor-profile/{doctorId}', 'DoctorController@profile');
        Route::post('doctors/changepassword', 'DoctorController@changePassword')->name('doctors.changepassword');

        Route::get('doctors/update/status', 'DoctorController@updateStatus')->name('doctors.update.status');

        //  add apointment 
        Route::post('doctors/addapointment', 'DoctorController@AddApointment')->name('doctors/addapointment');
        Route::post('doctors/update/apointment', 'DoctorController@updateApointment')->name('doctors.update.apointment');
        Route::post('doctors/delete/apointment', 'DoctorController@deleteApointment')->name('doctors.delete.apointment');

        // add services
        Route::post('doctors/addservice', 'DoctorController@addService')->name('doctors/addservice');
        Route::get('service/{id}/edit', 'DoctorController@editServic')->name('service.{id}.edit');
        Route::post('doctors/update/service', 'DoctorController@updateService')->name('doctors.update.service');
        Route::post('doctors/delete/service', 'DoctorController@deleteService')->name('doctors.delete.service');

        Route::post('doctors/addoffers', 'DoctorController@addOffer')->name('doctors/addoffers');
        Route::get('offer/{id}/edit', 'DoctorController@editOffer')->name('offer.{id}.edit');
        Route::post('doctors/update/offers', 'DoctorController@updateOffer')->name('doctors.update.offers');
        Route::post('doctors/delete/offers', 'DoctorController@deleteOffer')->name('doctors.delete.offers');

        Route::post('doctors/delete/reviews', 'DoctorController@deleteReviews')->name('doctors.delete.reviews');
        Route::post('doctors/delete/payment', 'DoctorController@deletePayment')->name('doctors.delete.payment');

        ####### doctors-report ######
        Route::get('doctors-appointments', 'ReportController@doctorsApointments');
        Route::post('doctorsearch', 'ReportController@doctorSearch')->name('doctorsearch');
        Route::get('doctorpdf/{doctorId}','ReportController@doctorPdf');

        Route::get('documents/{id}', 'DoctorController@getDocument');

#### end doctor ######

###### start  patient #########

    Route::get('patientnotifaction', 'PatientController@patientnotifaction')->name('patientnotifaction');
    Route::post('patient_notifaction', 'PatientController@patient_notifaction')->name('patient_notifaction');

    Route::get('patient-profile/{patientId}/', 'PatientController@profile');
    Route::get('patients/update/status', 'PatientController@updateStatus')->name('patients.update.status');
    Route::get('getdoctor/{id}', 'PatientController@getDoctor');
    Route::get('getoffer/{id}', 'PatientController@getOffer');
    Route::get('getservice/{id}', 'PatientController@getService');
 
    Route::get('gettime/{date}/{doctorid}', 'PatientController@getTime');
    Route::post('patients/addbooking', 'PatientController@addBooking')->name('patients.addbooking');
    Route::post('patients/changepassword', 'PatientController@changePassword')->name('patients.changepassword');
        
        
    ####### patients-report ########
    Route::get('patients-appointments', 'ReportController@patientsppointments');
    Route::post('/patientsearch', 'ReportController@patientsSearch')->name('patientsearch');
    Route::get('patientpdf/{doctorId}','ReportController@patientPdf');
        
#### end patient #####


#### start vendor ###
    // Route::get('create_vendor', 'Auth\RegisterVendorController@registerUser')->name('create_vendor');
    // Route::post('create_vendor', 'Auth\RegisterVendorController@registerNewUser')->name('create_vendor');

    Route::resource('shops','VendorController');
    Route::get('vendor-profile/{vendorId}', 'VendorController@profile');

    Route::get('vendors_update_status', 'VendorController@updateStatus')->name('vendors_update_status');

    Route::get('vendor-notifaction', 'VendorController@vendornotifaction')->name('vendor-notifaction');
    Route::post('vendor-notifaction', 'VendorController@vendor_notifaction')->name('vendor-notifaction');

    

###  end vendor      

        Route::post('appointments/update/status', 'AppointmentController@updateStatus')->name('appointments.update.status');
        Route::get('reports', 'ReportController@allreport');
       
       
       
        ###################### user-status ##############################
        Route::post('users/status/{id}', 'UsersController@updateStatus')->name('users/status/{id}');
        // Route::get('settings', 'ProfileController@settings');
        // Route::post('settings/update','ProfileController@updateSettings');

        // Route::get('settings', 'ProfileController@settings');
        // Route::get('about', 'ProfileController@about');
        // Route::get('contact', 'ProfileController@contact');
        // Route::get('privacy', 'ProfileController@privacy');

        Route::get('settings', 'ProfileController@settings');   
        Route::post('settings/update','ProfileController@updateSettings');
        
        Route::get('contact', 'ProfileController@contact');
        Route::post('settings/contactdata','ProfileController@updateContactData');

        Route::get('privacy', 'ProfileController@privacy');
        Route::post('settings/privacy','ProfileController@updatePrivacy');
        
        Route::get('agreements', 'ProfileController@agreements');
        Route::post('update/agreements','ProfileController@updateAgreement');

        Route::get('agreement_student', 'ProfileController@agreement_student');
        Route::post('update/agreement_student','ProfileController@updateAgreement_student');


        Route::get('terms', 'ProfileController@terms');
        Route::post('update/terms','ProfileController@updateTerms');


        Route::get('return_policy', 'ProfileController@return_policy');
        Route::post('update/return_policy','ProfileController@updateReturn_policy');
        

        ###################### admin-profile ##############################
        Route::get('admin-login', 'Auth\LoginController@LoginUser')->name('admin-login');
        Route::get('profile', 'ProfileController@index');
        Route::post('profile/update','ProfileController@updateProfile');
        Route::post('user/changepassword', 'ProfileController@changePassword')->name('user.changepassword');

                

       



/********************ADMIN ROUTES END******************************/

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('home');
});

