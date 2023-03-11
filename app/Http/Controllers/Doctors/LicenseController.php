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
use App\Doctor_license;
use App\Doctor_experience;
use Hash;
use Auth;
use Illuminate\Support\Str;
use DB;
use Mail;
class LicenseController extends Controller
{
    public function index()
    {
        $userid = Auth::guard('doctors')->user();
        $licenses=Doctor_license::where('doctorId',$userid->id)->first();
        
        return view('doctors.licenses.all',compact('licenses'));
    }

    public function update(Request $request)
    {
        $edit = Doctor_license::findOrFail($request->id);
         $edit->placeLicensesId  = $request->placeLicensesId;
        if($request->placeLicensesId==1){
            $edit->placeLicensesName  = "وزارةة الصحة";
        }elseif ($request->placeLicensesId==2) {
            $edit->placeLicensesName  = "الهيئات التنظيمية";
        }elseif ($request->placeLicensesId==3) {
            $edit->placeLicensesName  = "هيئة التخصصات الصحية";
        }else{
            $edit->placeLicensesName  = "اخري";
        }
       
        
        $edit->place  = $request->place;
        $edit->num  = $request->num;
        $edit->name  = $request->name;
        $edit->save();

        return redirect()->route('licenses.index')->with("message", 'تم التعديل بنجاح'); 
    }
    public function destroy(Request $request )
    {

        $delete = Doctor_license::findOrFail($request->id);
        $delete->delete();
        return redirect()->route('licenses.index')->with("message",'تم الحذف بنجاح');

    } 
}