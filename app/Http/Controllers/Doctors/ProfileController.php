<?php

namespace App\Http\Controllers\Doctors;
use App\User;
use App\ContactInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Country;
use App\City;
use DB;
use App\Doctor_bank;
use App\Doctor;
use App\Vendor;
use App\Student;

class ProfileController extends Controller
{
    
    public function index()
    {
        $countries=Country::all();
        $userid = Auth::guard('doctors')->user();
        $users=Doctor::findOrFail($userid->id);
        $country=Country::where('id',$userid->countryId)->first();
        $users->country=$country->name;
        return view('doctors.profile',compact('users','countries'));
    }
   
    public function agreements()
    {
        return view('vendors.agreement');
    }


    public function updateProfile(Request $request)
    {
        $userid = Auth::guard('doctors')->user();

        $edit = Doctor::findOrFail($userid->id);
        $edit->first_name    = $request->first_name;
        $edit->last_name    = $request->last_name;
        $edit->mobile  = $request->mobile;
        // $add->detail  = $request->detail; 
        // $add->countryId  = $request->countryId; 
        // $add->cityId  = $request->cityId;         
        if($file=$request->file('photo'))
        {
            $file_extension = $request -> file('photo') -> getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $file_nameone = $file_name;
            $path = 'img/profiles';
            $request-> file('photo') ->move($path,$file_name);
            $edit->photo  =$file_nameone;
        }else{
            $edit->photo  = $edit->photo; 
        }
        $edit->save();
        return back()->with("success", 'تم التعديل بنجاح'); 
    }

    
      public function changePassword(Request $request){
        $user= Auth::guard('doctors')->user();
        // $this->validate($request, [
        //     'current-password'     => 'required',
        //     'new-password'     => 'required',
        //     // 'confirm_password' => 'required|same:new_password',
        // ]);

        $this->validate( $request,[          
                'current-password'=>'required',
                'new-password'=>'required',
            ],
            [
                'current-password'=>'required',
                'new-password'=>'required',
            ]
        );



        // dd('ugutg');
        if (!(Hash::check($request->get('current-password'), $user->password))) {
            return redirect()->back()->with("errorss","كلمة المرور الحالية لا تتطابق مع كلمة المرور التي قدمتها. حاول مرة اخرى.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            return redirect()->back()->with("errorss","لا يمكن أن تكون كلمة المرور الجديدة هي نفسها كلمة مرورك الحالية. الرجاء اختيار كلمة مرور مختلفة.");
        }
        // dd('veferfrr');
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("message","تم تغيير الرقم السري بنجاح !");
    }
    public function getCity($id){
        echo json_encode(DB::table('cities')->where('countryId', $id)->get());
    }
    public function bankDetails()
    {        
        $userid = Auth::guard('doctors')->user();
        $bankdetails=Doctor_bank::where('doctorId',$userid->id)->first();
        $country= Country::All();
        
        $cities=City::all();
        foreach ($cities as $item) {
            $item->country= Country::where('id',$item->countryId)->first();
        }
        return view('doctors.bank.edit',compact('bankdetails','country','cities'));
    }
    public function updateBankDetails(Request $request)
    {
        $this->validate( $request,[          
                'countryId'=>'required',
                // 'cityId'=>'required',
                'persone_name'=>'required',
                'bank_name'=>'required',
                'bank_sub_name'=>'required',
                'acount_number'=>'required',  
            ],
            [
                'countryId.required'=>'الدولة مطلوبه',
                // 'cityId.required'=>' المدينة  مطلوبه ',
                'persone_name.required'=>' اسم الشخص صاحب الحساب مطلوب  ', 
                'bank_name.required'=>' اسم البنك مطلوب   ', 
                'bank_sub_name.required'=>' اسم فرع البنك الذي تم فيه فتح الحساب مطلوب  ', 
                'acount_number.required'=>' رقم الحساب ',

            ]
        );

         $userid = Auth::guard('instructors')->user();
         $edit = Bank::where('userid',$userid->id)->first();
         $edit->persone_name  = $request->persone_name;
         $edit->iban  = $request->iban;
         $edit->countryId  = $request->countryId;
         $edit->cityId  = $request->cityId;
         $edit->bank_name  = $request->bank_name;
         $edit->bank_sub_name  = $request->bank_sub_name;
         $edit->acount_number  = $request->acount_number;
         $edit->swift_code  = $request->swift_code;

         $edit->save();
         return back()->with("message", 'تم التعديل بنجاح'); 
    }








}
