<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Doctor;
use App\Student;
use App\Wallet;
use App\Bank;
use Illuminate\Support\Str;
use Mail;
use DB;
use Carbon\Carbon;
use Crypt;
use Auth;
use App\Country;
use App\Doctor_case;
class RegisterDoctorController extends Controller
{
    use RegistersUsers;
    // protected $redirectTo = RouteServiceProvider::HOME;

    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function registerUser()
    {   
        $countries=Country::all();
        return view('doctors.signup',compact('countries'));
    }
    public function getCountry($id){
        echo json_encode(DB::table('cities')->where('countryId', $id)->get());
    }
    
    public function registerNewUser(Request $request)
    {
        
        $this->validate( $request,[          
                'first_name'     => 'required',
                'last_name'     => 'required',
                'email'     => 'required',
                'password'     => 'required',
                'confirm_password' => 'required|same:password',
                'countryId'=>'required' 
            ],
            [
                'first_name.required'=>' الاسم الأول مطلوب',
                'last_name.required'=>' الاسم الأخير مطلوب ',
                'email.required'=>' البريد الإلكتروني مطلوب ',
                'password.required'=>' كلمة المرور مطلوبة ',
                'confirm_password.required'=>' يرجى إعادة كلمة المرور ',
                'countryId.required'=>' يرجى إختيار الدولة ',
            ]
        );

        $checkemail = Doctor::where("email" , $request->email)->first();
        if($checkemail){
            if(isset($request->lang)  && $request -> lang == 'en' ){
                return back()->with("errorss", 'Email already exists'); 
            }else{
                return back()->with("errorss", 'البريد الإلكتروني موجود مسبقا'); 
            }
        }else{
            $add = new Doctor();
            
            $add->first_name  = $request->first_name;
            $add->last_name  = $request->last_name; 
            $add->email  = $request->email;   
            $add->password  = bcrypt($request->password); 
            $add->countryId  = $request->countryId;             
            $add->save();

            $doctor_case= new Doctor_case;
            $doctor_case->doctorId  = $add->id;
            $doctor_case->status_servic  = 0; 
            $doctor_case->status_not  = 0; 
            $doctor_case->save();

            $user = $add->toArray();
            $user['link'] = Str::random(32);
            DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);
            Mail::send('emails.doctor-activation', $user, function($message) use ($user){
                $message->to($user['email']);
                $message->subject('Total Health - Activation Code');
            });

            // $createwallet = new Bank;
            // $createwallet->userId    = $add->id;
            // $createwallet->save();

            // $user = $add->toArray();
            // $user['link'] = Str::random(30);
            // DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);
            // Mail::send('emails.activation', $user, function($message) use ($user){
            //     $message->to($user['email']);
            //     $message->subject('walletskids.com - Activation Code');
            // });

            return redirect()->back()->with("message", 'يرجى زيارة بريدك الإلكتروني لتفعيل الحساب'); 
            
        }
       

    }
    public function instructorActivation($token){
        $check = DB::table('user_activations')->where('token',$token)->first();
        if(!is_null($check)){
            $user = Instructor::find($check->id_user);
            if ($user->is_activated ==1){
              //  return $this -> returnSuccessMessage('حسابكم مفعل');
                return redirect()->to('login/user')->with('message'," الحساب مفعل ");
            }
            $user->update(['is_activated' => 1]);
            DB::table('user_activations')->where('token',$token)->delete();
            //  return $this -> returnSuccessMessage('تم تفعيل حسابك');
            return redirect()->to('login/user')->with('message',"تم تفعيل حسابك");
        }
        // return $this -> returnError('رمز التفعيل غير صالح');  
        return redirect()->to('/login/user')->with('Warning',"رمز التفعيل غير صالج");
    }
           



      ///////////////
    public function forgotPassword()
    {  
    // dd('hhh');
        return view('auth.forget_password_doctor');
    }

    public function submitForgot(Request $request)
    {
      // dd('iughiu');
        $request->validate([
            'email' => 'required|email|exists:doctors',
        ]);
  
        $token = Str::random(64);
  
        DB::table('password_resets')->insert([
            'email' => $request->email, 
            'token' => $token, 
            'created_at' => Carbon::now()
        ]);
        // $vendor= Vendor::where('email',$request->email)->first();
        // if($vendor==null){
        //     return back()->with("errorss", 'البريد الإلكتروني غير موجود');
        // }else{
        Mail::send('emails.send-password-doctor', ['token' => $token], function($message) use($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
        // }
        if(session()->get('locale')){
            $langg=session()->get('locale');
        }else{
            $langg=app()->getLocale();
        }

         
        // if($langg == 'en' ){
        //     return back()->with('message', 'We have e-mailed your password reset link! ');
        // }else{
            return back()->with('message', 'لقد أرسلنا رابط إعادة تعيين كلمة المرور بالبريد الإلكتروني!');
        // }
    }


    public function resetUserPasswordGet($token) { 
         return view('auth.reset_password_doctor', ['token' => $token]);
    }


    public function resetUserPasswordPost(Request $request)
    {
          $request->validate([
              // 'email' => 'required|email|exists:users',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
          $updatePassword = DB::table('password_resets')->where([
                                // 'email' => $request->email, 
                                'token' => $request->token
                              ])->first();
  
          if(!$updatePassword){
              return back()->withInput()->with('error', 'الرمز غير معروف يرجى إرسال الرابط مره اخرى والمحاوله مجددا!');
          }
          $user = Doctor::where('email', $updatePassword->email)->first();
          // $user->email  = $request->email;   
          $user->password  = bcrypt($request->password); 
          $user-> save();
          // $user = Instructor::where('email', $request->email)
          //             ->update(['password' => Hash::make($request->password)]);
 

          DB::table('password_resets')->where(['email'=> $updatePassword->email])->delete();
          if(session()->get('locale')){
              $langg=session()->get('locale');
          }else{
              $langg=app()->getLocale();
          }

         

          if($langg == 'en' ){
            return redirect('/login/user')->with('message', 'Your password has been changed! ');
          }else{
            return redirect('/login/user')->with('message', 'تم تغيير كلمة السر الخاصة بك!');
          }
    }
    
}
