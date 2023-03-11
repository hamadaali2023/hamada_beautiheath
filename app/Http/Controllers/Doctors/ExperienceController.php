<?php
namespace App\Http\Controllers\Doctors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\City;
use App\Country;
use App\Doctor;
use App\Doctor_service;
use Carbon\Carbon;
use App\Order;
use App\SubCategory;
use App\Category;

use App\Doctor_experience;
use Hash;
use Auth;
use Illuminate\Support\Str;
use DB;
use Mail;
class ExperienceController extends Controller
{
    public function index()
    {
        $userid = Auth::guard('doctors')->user();
        $doctor_experiences=Doctor_experience::where('doctorId',$userid->id)->get();
        
        return view('doctors.experiences.all',compact('doctor_experiences'));
    }

    
    public function store(Request $request)
    {   
        $userid= Auth::guard('doctors')->user();
        $add= new Doctor_experience;
        $add->doctorId  =$userid->id;
        $add->year  = $request->year;
        $add->organization  = $request->organization;
        $add->from  = $request->from;
        $add->to  = $request->to;
        $add->job_title  = $request->job_title;
        $add->job_desc  = $request->job_desc;
        $add->save();
       
        return redirect()->back()->with("message", 'تم الإضافة بنجاح');
    }  

    // public function edit(Doctor_experience $education)
    // {
    //     return view('doctors.experiences.edit',compact('education'));
    // }

    public function update(Request $request,Doctor_experience $education)
    {
        $edit = Doctor_experience::findOrFail($request->id);
        $edit->year  = $request->year;
        $edit->organization  = $request->organization;
        $edit->from  = $request->from;
        $edit->to  = $request->to;
        $edit->job_title  = $request->job_title;
        $edit->job_desc  = $request->job_desc;
        $edit->save();

        return redirect()->route('experiences.index')->with("message", 'تم التعديل بنجاح'); 
    }
  
    public function destroy(Request $request )
    {

        $delete = Doctor_experience::findOrFail($request->id);
        $delete->delete();
        return redirect()->route('experiences.index')->with("message",'تم الحذف بنجاح');

    } 
}