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
use App\Language;
use App\Doctor_language;
use Hash;
use Auth;
use Illuminate\Support\Str;
use DB;
use Mail;
class LanguageController extends Controller
{
    public function index()
    {
        $userid = Auth::guard('doctors')->user();
        $doctor_languages=Doctor_language::where('doctorId',$userid->id)->get();
        foreach ($doctor_languages as $item) {
            $item->language= Language::where('id',$item->languageId)->first();
        }
        $languages=Language::get();
        
        return view('doctors.languages.all',compact('doctor_languages','languages'));
    }


    public function store(Request $request)
    {
        $userid= Auth::guard('doctors')->user();
        $checservice = Doctor_language::where('doctorId',$userid->id)
                                        ->where('languageId',$request->languageId)->first();
        if($checservice){
            // $checservice->delete();
             return back()->with("error", 'اللغة موجودة بالفعل'); 
        }
        $add= new Doctor_language;
        $add->doctorId  =$userid->id;
        $add->languageId  = $request->languageId;
       
        $add->save();
        return redirect()->back()->with("message", 'تم الإضافة بنجاح');
    }  


    public function destroy(Request $request )
    {

        $delete = Doctor_language::findOrFail($request->id);
        $delete->delete();
        return redirect()->route('languages.index')->with("message",'تم الحذف بنجاح');

    } 
}