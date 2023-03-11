<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Vendor;
use App\Student;
use App\Wallet;
use App\Bank;
use Illuminate\Support\Str;
use Mail;
use DB;
use Crypt;
use Auth;
use App\Country;
use Carbon\Carbon;
class RegisterVendorController extends Controller
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
        return view('vendors.signup',compact('countries'));
    }
    public function getCountry($id){
        echo json_encode(DB::table('cities')->where('countryId', $id)->get());
    }
    
    public function registerNewUser(Request $request)
    {
        
        $this->validate( $request,[          
                'name'     => 'required',
                'email'     => 'required',
                'password'     => 'required',
                'confirm_password' => 'required|same:password',
                'countryId'=>'required' 
            ],
            [
                'name.required'=>' الاسم مطلوب ',
                'email.required'=>' البريد الإلكتروني مطلوب ',
                'password.required'=>' كلمة المرور مطلوبة ',
                'confirm_password.required'=>' يرجى إعادة كلمة المرور ',
                'countryId.required'=>' يرجى إختيار الدولة ',

            ]
        );

        $checkemail = Vendor::where("email" , $request->email)->first();
        if($checkemail){
            // if(isset($request->lang)  && $request -> lang == 'en' ){
            //     return back()->with("errors", 'Email already exists'); 
            // }else{
                return back()->with("errorss", 'البريد الإلكتروني موجود مسبقا'); 
            // }
        }else{
            $add = new Vendor();
            
            $add->name  = $request->name;    
            $add->email  = $request->email;   
            $add->password  = bcrypt($request->password); 
            $add->countryId  = $request->countryId;             
            $add->save();

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
            
           
            
            $user = $add->toArray();
            $user['link'] = Str::random(32);
            DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);
            Mail::send('emails.vendor-activation', $user, function($message) use ($user){
                $message->to($user['email']);
                $message->subject('صحتي وجمالي - Activation Code');
            });

            return redirect()->back()->with("message", 'يرجى زيارة بريدك الإلكتروني لتفعيل الحساب'); 
            
        }
       

    }
    // public function instructorActivation($token){
    //     $check = DB::table('user_activations')->where('token',$token)->first();
    //     if(!is_null($check)){
    //         $user = Instructor::find($check->id_user);
    //         if ($user->is_activated ==1){
    //           //  return $this -> returnSuccessMessage('حسابكم مفعل');
    //             return redirect()->to('login/user')->with('message'," الحساب مفعل ");
    //         }
    //         $user->update(['is_activated' => 1]);
    //         DB::table('user_activations')->where('token',$token)->delete();
    //         //  return $this -> returnSuccessMessage('تم تفعيل حسابك');
    //         return redirect()->to('login/user')->with('message',"تم تفعيل حسابك");
    //     }
    //     // return $this -> returnError('رمز التفعيل غير صالح');  
    //     return redirect()->to('/login/user')->with('Warning',"رمز التفعيل غير صالج");
    // }
           

    
    ///////////////
    public function forgotPassword()
    {   
        return view('auth.forget_password_vendor');
    }

    public function submitForgot(Request $request)
    {
      // dd('iughiu');
        $request->validate([
            'email' => 'required|email|exists:vendors',
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
        Mail::send('emails.send-password-vendor', ['token' => $token], function($message) use($request){
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
         return view('auth.reset_password_vendor', ['token' => $token]);
    }


    public function resetUserPasswordPost(Request $request)
    {
        // dd('dddddddd');
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
          $user = Vendor::where('email', $updatePassword->email)->first();
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

         

        //   if($langg == 'en' ){
        //     return redirect('/login/user')->with('message', 'Your password has been changed! ');
        //   }else{
            return back()->with('message', 'تم تغيير كلمة السر الخاصة بك!');
        //   }
    }
}
