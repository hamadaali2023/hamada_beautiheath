<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Appointment;
use App\Doctor;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Traits\GeneralTrait;
use Hash;
use Carbon\Carbon;
use App\Order;
use App\Order_sub_category;
use App\Doctor_service;
use App\SubCategory;



class PatientController extends Controller
{
        use GeneralTrait; 

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        $patients=Patient::all();
        return view('admin.patients.all',compact('patients'));
    }

     
    public function store(Request $request)
    {
        // dd($request->photo);
        
        $add = new Patient();
        if($file=$request->file('photo'))
        {
            $file_extension = $request -> file('photo') -> getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $file_nameone = $file_name;
            $path = 'assets_admin/img/patients';
            $request-> file('photo') ->move($path,$file_name);
            $add->photo  = $file_nameone;
        }else{
            $add->photo  = $request->url; 
        }

        $add->first_name_ar  = $request->first_name_ar; 
        $add->last_name_ar  = $request->last_name_ar; 
        $add->first_name_en  = $request->first_name_en; 
        $add->last_name_en  = $request->last_name_en;    
        $add->email  = $request->email;   
        $add->password  = bcrypt($request->password); 
        // $add->password  = Hash::make($request->password);
        $add->mobile  = $request->mobile; 
        $add->gender  = $request->gender; 
        $add->dateOfBirth  = $request->dateOfBirth;  
        
        $add-> save();

        $user = $add->toArray();
        $user['link'] = Str::random(32);
        DB::table('user_activations')->insert(['id_user'=>$user['id'],'token'=>$user['link']]);
        Mail::send('emails.patient-activation', $user, function($message) use ($user){
            $message->to($user['email']);
            $message->subject('esptaila - Activation Code');
        });
        return redirect()->back()->with("message",'تمت الإضافة بنجاح'); 
    }


    public function destroy(Request $request )
    {
        

        // $appointment=Appointment::where('patientId',$request->id)->get(); 
        // if(count($appointment) == 0){
           $delete = Patient::findOrFail($request->id);
           $delete->delete();
            return redirect()->route('patients.index')->with("message",'تم الحذف بنجاح');
        // }else{
        //   return redirect()->back()->with("error", 'غير مسموح حذف هذا العنصر'); 
        // }

        
    } 

    public function edit(Patient $patient)
    {
        
        return view('admin.patients.edit',compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $edit = Patient::findOrFail($patient->id);
         if($file=$request->file('photo'))
         {
            $file_extension = $request -> file('photo') -> getClientOriginalExtension();
            $file_name = time().'.'.$file_extension;
            $file_nameone = $file_name;
            $path = 'assets_admin/img/patients';
            $request-> file('photo') ->move($path,$file_name);
            $edit->photo  = $file_nameone;
         }else{
            $edit->photo  = $request->url; 
         }

        
        $edit->first_name_ar  = $request->first_name_ar; 
        $edit->last_name_ar  = $request->last_name_ar; 
        $edit->first_name_en  = $request->first_name_en; 
        $edit->last_name_en  = $request->last_name_en;  
        // $edit->email  = $request->email;   
        // $edit->password  = bcrypt($request->password);  
        $edit->mobile  = $request->mobile; 
        $edit->gender  = $request->gender; 
        $edit->dateOfBirth  = $request->dateOfBirth; 
        $edit-> save();

        
         return redirect()->route('patients.index')->with("message", 'تم التعديل بنجاح'); 
    }

    public function profile($patient)
    {
        $patients = Patient::findOrFail($patient);
        $doctors = Doctor::get();
        $doctors = Doctor::get();
        $orders=Order::where('patientId',$patient)->where('doctorId','!=',null)->get();
        foreach($orders as $item){
            $item->category=Category::where('id',$item->categoryId)->first();
            $patient=Patient::where('id',$item->patientId)->first();
            $patient->photo= "https://findfamily.net/care/assets_admin/img/patient/".$patient->photo;
            $item->patient=$patient;
            $doctor = Doctor::where('id',$item->doctorId)->first();
            if($doctor){
                $doctor->photo= "https://findfamily.net/care/assets_admin/img/doctors/photo/".$doctor->photo;
            }
            $item->doctor=$doctor;
            ///// subcategory
            $subcategory=[];
            $doctor_service_price_total=20;
            $order_sub_category= Order_sub_category::where('orderId',$item->id)->get();
            foreach ($order_sub_category as $order_sub_category_item) { 
                
                    $doctor_service_price = Doctor_service::where('doctorId',$item->doctorId)->where('subCategoryId',$order_sub_category_item->subCategoryId)->first();
                    $doctor_service_price_total +=Doctor_service::where('subCategoryId',$order_sub_category_item->subCategoryId)->sum('price');
                
                $subcategory[]=SubCategory::where("id" , $order_sub_category_item->subCategoryId)->first();
                foreach ($subcategory as $subcategory_item) {  
                    $subcategory_item->duration=$order_sub_category_item->duration;
                    if($doctor_service_price){
                        $subcategory_item->price=$doctor_service_price->price;
                    }
                }    
            }
            
            $item->subcategory=$subcategory;
            $item->total_price=$doctor_service_price_total;
        }
        return view('admin.patients.patient-profile',compact('patients','orders','doctors'));
    }

    public function changePassword(Request $request){
        $patient=Patient::where('id',$request->patientId)->first();
        // dd($patient->password);


        $this->validate($request, [
            'current-password'     => 'required',
            'new-password'     => 'required',
            // 'confirm_password' => 'required|same:new_password',
        ]);

        if (!(Hash::check($request->get('current-password'), $patient->password))) {
            return redirect()->back()->with("error","كلمة المرور الحالية لا تتطابق مع كلمة المرور التي قدمتها. حاول مرة اخرى.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            return redirect()->back()->with("error","لا يمكن أن تكون كلمة المرور الجديدة هي نفسها كلمة مرورك الحالية. الرجاء اختيار كلمة مرور مختلفة.");
        }

        
        $patient->password = bcrypt($request->get('new-password'));
        $patient->save();
        return redirect()->back()->with("message","تم تغيير الرقم السري بنجاح !");
    }

    public function getDoctor($id){
        echo json_encode(DB::table('doctors')->where('specialityId', $id)->get());
    }
    public function getOffer($id){
        echo json_encode(DB::table('offers')->where('doctorId', $id)->get());
    }
    public function getService($id){
        echo json_encode(DB::table('services')->where('doctorId', $id)->get());
    }

    public function getTime($date,$doctorId){

        $day = Carbon::createFromFormat('Y-m-d', $date)->dayOfWeek;
        // dd($date);
        // dd($doctorId);
        
        // $a=DB::table('working_days')->where('day_number', $day)->take(1)->get();
        $a=DB::table('working_days')->where('day_number', $day)->where('doctorId', $doctorId)->get();
        // $checktimefound=Appointment::where('date', $date)->where('doctorId',$doctorId)->first();
        $checktimefound=Appointment::where('date', $date)
                                    ->where('status',"confirmed")
                                    ->where('payment_status','!=',0)
                                    ->first();
        // dd($checktimefound);
        foreach ($a as $item) {
            $start=strtotime($item->from_morning);
            $end=strtotime($item->to_morning);

            if($start !=null){
                for ($i=$start;$i<=$end;$i = $i + $item->duration*60)
                {
                    // $item->first_time[]= date('g:i ',$i);
                    $first[]= date('g:i',$i);
                    
                    $first_time  = [  
                        'alltime'=>$first,
                        'appointmentbooked'=>$checktimefound,
                    ];

                    $item->first_time=$first_time;
                }
            }else{
                $item->first_time[]= 'لا يوجد مواعيد صباحا';
            }    



            $start2=strtotime($item->from_afternoon);
            $end2=strtotime($item->to_afternoon);
            if($start2 !=null){
                for ($i=$start2;$i<=$end2;$i = $i + $item->duration*60)
                {
                    // $item->second_time[]= date('g:i ',$i);
                    $second[]= date('g:i',$i);
                    
                    $second_time  = [  
                        'alltime'=>$second,
                        'appointmentbooked'=>$checktimefound,
                    ];
                    $item->second_time=$second_time;
                }
                 
            }else{
                $item->second_time[]= 'لا يوجد مواعيد بعد الظهر';
                // $item->second_time[]= '';
            }

            $start3=strtotime($item->from_evening);
            $end3=strtotime($item->to_evening);
            if($start3  !=null){
                for ($i=$start3;$i<=$end3;$i = $i + $item->duration*60)
                {
                    // $item->third_time[]= date('g:i ',$i);
                    $third[]= date('g:i',$i);
                    
                    $third_time  = [  
                        'alltime'=>$third,
                        'appointmentbooked'=>$checktimefound,
                    ];
                    $item->third_time=$third_time;
                }
            }else{
                $item->third_time[]= 'لا يوجد مواعيد ف المساء';
                // $item->third_time[]= '';
            }
    
            
        }   
         // return $this->returnData('times', $a);
         // dd($a);
        echo json_encode($a);
        
        // echo json_encode(DB::table('working_days')->where('day_number', $day)->get());
    }


    public function addBooking(Request $request)
    {
        
        // $add = new Appointment;
        // $add->patientId    = $request->patientId;
        // $add->doctorId    = $request->doctorId;
        // $add->date  = $request->date;
        // $add->time  = $request->time;
        // $add->save();

        $appointments=Appointment::where('patientId',$request->patientId)
                                   ->where('doctorId',$request->doctorId)
                                   ->where('date',$request->date)
                                   ->where('status',"confirmed")
                                   ->where('payment_status','!=',0)
                                   ->first();
        if($appointments ==null){
            return redirect()->back()->with("error", 'لديك موعد مع هذا الدكتور بالفعل'); 
             // return $this->returnError('001', 'لديك موعد سابق بالفعل مع هذا الدكتور ');
        }else{
            $add = new Appointment;
            $add->patientId    = $request->patientId;
            $add->doctorId    = $request->doctorId;
            $add->date  = $request->date;
            $add->time  = $request->time;
            $add->permanent_type  = $request->permanent_type;
            $add->type  = $request->type;
            $add->save();
            // dd($add);
            // return $this->returnData('bookingid', $add->id);
            return redirect()->back()->with("message",'تم ارسال الحجز');  
        }   





        
    }




    public function updateStatus(Request $request)
    {
       $user = Patient::findOrFail($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['message' => 'تم تعديل الحالة']);
    }



    public function patientnotifaction()
    {
        $patients= Patient::all();
        return view('admin.patients.notifaction',compact('patients'));
    }

    public function patient_notifaction(Request $request)
    {
        $length = count($request->device_token);
        if($length > 0)
        {
            for($i=0; $i<$length; $i++)
            {
                $SERVER_API_KEY = 'AAAApBYZ39k:APA91bGBvOSn9SvmgWf_-OLXZO_JPKdicSPBOEIcrYsTYXiu_HVPNopluRu43RtRbpLnWMGNCWHbPHscRYLk72UUh8Zk3moiZ6XLE4bHgCDniuoq1qRzk7ww6MTXyBqJLUpmBjpR7SR1';
                $token_1 = $request->device_token[$i];
                $message = $request->message;
                $data = [
                    "registration_ids" => [
                        $token_1
                    ],
                    "notification" => [
                        "title" => 'صحتي وجمالي',
                        "body" =>  $message,
                        "sound"=> "default" // required for sound on ios
                    ],
                ];

                $dataString = json_encode($data);
                $headers = [
                    'Authorization: key=' . $SERVER_API_KEY,
                    'Content-Type: application/json',
                ];
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
                $response = curl_exec($ch);
                    
            }                      
        }
        return redirect()->back()->with("message","تم الإرسال");       
    }




        // for ($j = 0; $j <= 120; $j+=15){
        //     //inside the inner loop
        //     echo '<br>';
        //     echo $j;
        //   }
       




        // $day = "10/14/2011";

        // $startTime = date(strtotime(" 16:00"));
        // $endTime = date(strtotime(" 19:00"));

        // $timeDiff = round(($endTime - $startTime)/60/60);

        // $startHour = date("G", $startTime);
        // $endHour = $startHour + $timeDiff; 

        // for ($i=$startHour; $i <= $endHour; $i++)
        // {
        //     for ($j = 0; $j <= 45; $j+=15)
        //     {
        //         $time = $i.":".str_pad($j, 2, '0', STR_PAD_LEFT);
        //         echo  date("g:i", strtotime($time));
        //         echo "<br>";
        //         // echo (date(strtotime($time)) <= $endTime) ? date("g:i", strtotime($time))."<br>" : "";
        //     }
        // }

        // $start=strtotime("10:00");
        // $end=strtotime("12:00");

        // for ($i=$start;$i<=$end;$i = $i + 15*60)
        // {
        //     echo date('g:i A',$i).'<br>';
        // }





       //   $formatted_dt1=Carbon::parse($request->from_date);
       //          $formatted_dt2=Carbon::parse($request->to_date);
       //          $res=$formatted_dt1->diffInDays($formatted_dt2);
       //          print_r($length);
       //          dd($res);
       //          $length = count($res);

       //          $length = count($request->day);
       //          dd($length);

       //  $car= Carbon::now();
       //  // dd($car->dayOfWeek);

       //  $date = WorkingDays::select('created_at')->first();
       //  // dd($date);
       //  // return Carbon::parse($date->created_at)->day;

       //  $times = $request->from_date;
       // // dd($times);
       
       //  $year = Carbon::createFromFormat('Y-m-d', $times)->dayOfWeek;
       //  dd($year);

       //   $timestemp = $times;
       //  return Carbon::parse($request->from_date)->day;

       //   $formatted_dt1=Carbon::parse($request->from_date);
       //          $formatted_dt2=Carbon::parse($request->to_date);
       //          $res=$formatted_dt1->diffInDays($formatted_dt2);

       //  // $finish_time = Carbon::format($request->to_date);
       //  dd(Carbon::format($start_time));
}
