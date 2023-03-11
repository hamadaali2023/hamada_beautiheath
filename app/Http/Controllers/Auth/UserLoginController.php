<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Vendor;
use App\Doctor;

use DB;
use Crypt;
use Hash;
use Auth;
class UserLoginController extends Controller
{
    // use AuthenticatesUsers;

    // protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    

    public function UserLogin()
    {   
      // dd('rthy');
        return view('vendors.login');
    }

    public function doctorLogin()
    {   
      // dd('rthy');
        return view('doctors.login');
    }


    public function LoginUser(request $request)
    {
      $this->validate(request(),[
            'email'    => 'required',
            'password' => 'required',
        ],
        [
            'email.required'=>' البريد  الإلكتروني مطلوب',
            'password.required'=>' كلمة المرور مطلوبة',
        ]
      );
      // dd('ddd');
      $credentials = $request -> only(['email','password']);

      $checkinstructor = Vendor::where("email" , $request->email)->first();

      if($checkinstructor){
          if($checkinstructor->is_activated ==0)
          {
            // Auth::guard('students')->logout();
            return redirect('user-login')->with("errorss", 'الحساب غير مفعل'); 
          }else{
            $good = Auth::guard('vendors') -> attempt($credentials);
            if($good) {
                return redirect('vendors/dashboard');
            }else{
              return redirect('user-login')->with("errorss", 'بيانات الدخول غير صحيحة'); 
            }
          }
         
      }else{
        return redirect('user-login')->with("errorss", 'بيانات الدخول غير صحيحة'); 
      }
      // if($checkinstructor){
      //     $good =  Auth::guard('instructors') -> attempt($credentials);
      //     if($good ) {
      //         $user = Auth::guard('instructors')->user();
      //         if($user->is_activated ==0)
      //         {
      //           Auth::guard('students')->logout();
      //           return redirect('login/user')->with("errorss", 'الحساب غير مفعل'); 
      //         }
      //       return redirect('/');
      //     }
      // }else{
      //   return redirect('login/user')->with("errorss", 'بيانات الدخول غير صحيحة'); 
      // }
    }
    public function LoginDoctor(request $request)
    {
      $this->validate(request(),[
            'email'    => 'required',
            'password' => 'required',
        ],
        [
            'email.required'=>' البريد  الإلكتروني مطلوب',
            'password.required'=>' كلمة المرور مطلوبة',
        ]
      );

      $credentials = $request -> only(['email','password']);

      $checkinstructor = Doctor::where("email" , $request->email)->first();

      if($checkinstructor){
          if($checkinstructor->is_activated ==0)
          {
            // Auth::guard('students')->logout();
            return redirect('doctor-login')->with("errorss", 'الحساب غير مفعل'); 
          }else{
            $good = Auth::guard('doctors') -> attempt($credentials);
            if($good) {
              
                return redirect('doctor/dashboard');
             
            }else{
               return redirect('doctor-login')->with("errorss", 'بيانات الدخول غير صحيحة'); 
            }
          }
         
      }else{
        return redirect('doctor-login')->with("errorss", 'بيانات الدخول غير صحيحة'); 
      }
      // if($checkinstructor){
      //     $good =  Auth::guard('instructors') -> attempt($credentials);
      //     if($good ) {
      //         $user = Auth::guard('instructors')->user();
      //         if($user->is_activated ==0)
      //         {
      //           Auth::guard('students')->logout();
      //           return redirect('login/user')->with("errorss", 'الحساب غير مفعل'); 
      //         }
      //       return redirect('/');
      //     }
      // }else{
      //   return redirect('login/user')->with("errorss", 'بيانات الدخول غير صحيحة'); 
      // }
    }
    public function signOutInstructors() {
      Auth::guard('vendors')->logout();
      return redirect('user-login');
    }

    public function signOutDoctors() {
      Auth::guard('doctors')->logout();
      return redirect('doctor-login');
    }

    // public function forgotPassword()
    // {   
    //     return view('auth.forgetpassword');
    // }

    // public function submitForgot(Request $request)
    // {
    //   // dd('iughiu');
    //       $request->validate([
    //           'email' => 'required|email|exists:instructors',
    //       ]);
  
    //       $token = Str::random(64);
  
    //       DB::table('password_resets')->insert([
    //           'email' => $request->email, 
    //           'token' => $token, 
    //           'created_at' => Carbon::now()
    //       ]);
  
    //       Mail::send('emails.forgetpassword', ['token' => $token], function($message) use($request){
    //           $message->to($request->email);
    //           $message->subject('Reset Password');
    //       });
  
    //       if(session()->get('locale')){
    //           $langg=session()->get('locale');
    //       }else{
    //           $langg=app()->getLocale();
    //       }

         

    //       if($langg == 'en' ){
    //         return back()->with('message', 'We have e-mailed your password reset link! ');
    //       }else{
    //         return back()->with('message', 'لقد أرسلنا رابط إعادة تعيين كلمة المرور بالبريد الإلكتروني!');
    //       }
    // }


    // public function resetUserPasswordGet($token) { 
    //      return view('auth.forgetpasswordlink', ['token' => $token]);
    // }


    // public function resetUserPasswordPost(Request $request)
    // {
    //       $request->validate([
    //           // 'email' => 'required|email|exists:users',
    //           'password' => 'required|string|min:6|confirmed',
    //           'password_confirmation' => 'required'
    //       ]);
  
    //       $updatePassword = DB::table('password_resets')->where([
    //                             // 'email' => $request->email, 
    //                             'token' => $request->token
    //                           ])->first();
  
    //       if(!$updatePassword){
    //           return back()->withInput()->with('error', 'Invalid token!');
    //       }
    //       $user = Instructor::where('email', $updatePassword->email)->first();
    //       // $user->email  = $request->email;   
    //       $user->password  = bcrypt($request->password); 
    //       $user-> save();
    //       // $user = Instructor::where('email', $request->email)
    //       //             ->update(['password' => Hash::make($request->password)]);
 

    //       DB::table('password_resets')->where(['email'=> $updatePassword->email])->delete();
    //       if(session()->get('locale')){
    //           $langg=session()->get('locale');
    //       }else{
    //           $langg=app()->getLocale();
    //       }

         

    //       if($langg == 'en' ){
    //         return redirect('/login/user')->with('message', 'Your password has been changed! ');
    //       }else{
    //         return redirect('/login/user')->with('message', 'تم تغيير كلمة السر الخاصة بك!');
    //       }
    // }

    // public function signOutInstructors() {
    //   Auth::guard('students')->user()::logout();
    //   return redirect('/');
    // }
    public function signOut() {
      Auth::logout();
      return redirect('/login/user');
    }

    
}
