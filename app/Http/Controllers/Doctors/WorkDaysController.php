<?php

namespace App\Http\Controllers\Doctors;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Work_days;
use App\Doctor;
use Carbon\Carbon;
use App\Day;
use App\Time;
use Auth;

use DB;
use Mail;
class WorkDaysController extends Controller
{
    public function index()
    {
        $userid = Auth::guard('doctors')->user();
        $work_days=Work_days::where('doctorId',$userid->id)->first();
       
            $work_days->day= Day::where('work_dayId',$work_days->id)->first();
            $work_days->time= Time::where('work_dayId',$work_days->id)->first();
        
        // dd($work_days);
        return view('doctors.work_days.edit',compact('work_days'));
    }
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }
    public function update(Request $request)
    {
        
        $userid = Auth::guard('doctors')->user();
        $checkworkday = Work_days::where('doctorId',$userid->id)->first();
        
        if($checkworkday !=null){
            $checkworkday->delete();
            $add = new Work_days;
            $add->doctorId  = $userid->id;
            $add->save();

            $day = new Day;
            $day->work_dayId = $add->id;
            $day->sat  = $request->sat;
            $day->sun  = $request->sun;
            $day->mon  = $request->mon;
            $day->tus  = $request->tus;
            $day->wed  = $request->wed;
            $day->thu  = $request->thu;
            $day->fri  = $request->fri;
            $day->save();

            $time = new Time;
            $time->work_dayId  = $add->id;
            $time->from_time  = $request->from_time;
            $time->to_time  = $request->to_time;
            $time->save();
            return redirect()->route('work_days.index')->with("message", 'تم الحفظ بنجاح'); 
        }else{
            $add = new Work_days;
            $add->doctorId  = $request->doctorId;
            $add->save();

            $day = new Day;
            $day->work_dayId = $add->id;
            $day->sat  = $request->sat;
            $day->sun  = $request->sun;
            $day->mon  = $request->mon;
            $day->tus  = $request->tus;
            $day->wed  = $request->wed;
            $day->thu  = $request->thu;
            $day->fri  = $request->fri;
            $day->save();

            $time = new Time;
            $time->work_dayId  = $add->id;
            $time->from_time  = $request->from_time;
            $time->to_time  = $request->to_time;
            $time->save();
            
            return redirect()->route('work_days.index')->with("message", 'تم الحفظ'); 
               

        }

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work_days  $work_days
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work_days $work_days)
    {
        //
    }
}
