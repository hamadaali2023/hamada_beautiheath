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
use App\Companies_insurance;
use App\Doctor_insurance;
use Hash;
use Auth;
use Illuminate\Support\Str;
use DB;
use Mail;
class InsuranceController extends Controller
{
    public function index()
    {
        $userid = Auth::guard('doctors')->user();
        $insurances=Doctor_insurance::where('doctorId',$userid->id)->get();
        foreach ($insurances as $item) {
            $item->company_name= Companies_insurance::where('id',$item->companies_insuranceId)->first();
        }
        $companies_insurance=Companies_insurance::get();
        return view('doctors.insurances.all',compact('insurances','companies_insurance'));
    }
    public function getSubCategory($id){
        echo json_encode(DB::table('sub_categories')->where('categoryId', $id)->get());
    }

    public function store(Request $request)
    {
        $userid= Auth::guard('doctors')->user();
        
        $add= new Doctor_insurance;
        $add->doctorId  =$userid->id;
        $add->companies_insuranceId  = $request->companies_insuranceId;
        $add->name  = $request->name;
        $add->type  = $request->type;
        $add->number  = $request->number;
        $add->date  = $request->date;

        $add->save();
      
        return redirect()->back()->with("message", 'تم الإضافة بنجاح');
    }  

    public function edit(Doctor_insurance $insurance)
    {
        // dd($service->id);
        $companies_insurance=Companies_insurance::get();
        return view('doctors.insurances.edit',compact('insurance','companies_insurance'));
    }

    public function update(Request $request,Doctor_insurance $insurance)
    {
        // dd('erifuheiruhfer');
        $edit = Doctor_insurance::findOrFail($insurance->id);
        
        // $edit->price  = $request->price;
        // $edit->gender  = $request->gender;

        $edit->companies_insuranceId  = $request->companies_insuranceId;
        $edit->name  = $request->name;
        $edit->type  = $request->type;
        $edit->number  = $request->number;
        $edit->date  = $request->date;
        $edit->save();

        return redirect()->route('insurances.index')->with("message", 'تم التعديل بنجاح'); 
    }
  

    public function destroy(Request $request )
    {

        $delete = Doctor_insurance::findOrFail($request->id);
        $delete->delete();
        return redirect()->route('insurances.index')->with("message",'تم الحذف بنجاح');

    } 
}