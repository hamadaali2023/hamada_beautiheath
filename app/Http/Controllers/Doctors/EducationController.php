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
use App\Doctor_education;

use Hash;
use Auth;
use Illuminate\Support\Str;
use DB;
use Mail;
class EducationController extends Controller
{
    public function index()
    {
        $userid = Auth::guard('doctors')->user();
        $doctor_educations=Doctor_education::where('doctorId',$userid->id)->get();
        return view('doctors.educations.all',compact('doctor_educations'));
    }
    
    
    public function store(Request $request)
    {   
        $userid= Auth::guard('doctors')->user();
        $add= new Doctor_education;
        $add->doctorId  =$userid->id;
        $add->degree  = $request->degree;
        $add->name  = $request->name;
        $add->speciality  = $request->speciality;
        $add->save();
       
        
        return redirect()->back()->with("message", 'تم الإضافة بنجاح');
    }  

    public function edit(Doctor_education $education)
    {
        return view('doctors.educations.edit',compact('education'));
    }

    public function update(Request $request,Doctor_education $education)
    {
        $edit = Doctor_education::findOrFail($education->id);
        
        $edit->degree  = $request->degree;
        $edit->name  = $request->name;
        $edit->speciality  = $request->speciality;
        $edit->save();

        return redirect()->route('educations.index')->with("message", 'تم التعديل بنجاح'); 
    }
  
    public function destroy(Request $request )
    {

        $delete = Doctor_education::findOrFail($request->id);
        $delete->delete();
        return redirect()->route('educations.index')->with("message",'تم الحذف بنجاح');

    } 
}