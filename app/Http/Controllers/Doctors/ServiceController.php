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
use Hash;
use Auth;
use Illuminate\Support\Str;
use DB;
use Mail;

class ServiceController extends Controller
{

    public function index()
    {
        $doctors_services=Doctor_service::all();
        foreach ($doctors_services as $item) {
            $item->categoryname= Category::where('id',$item->categoryId)->first();
            $item->subcategory= SubCategory::where('id',$item->subCategoryId)->first();
        }
        // dd($doctors_services);
        return view('doctors.services.all',compact('doctors_services'));
    }
    public function create()
    {
        $categories=Category::all();
        return view('doctors.services.create',compact('categories'));
    }
    public function getSubCategory($id){
        echo json_encode(DB::table('sub_categories')->where('categoryId', $id)->get());
    }

    public function store(Request $request)
    {
        $userid= Auth::guard('doctors')->user();

        $checservice = Doctor_service::where('doctorId',$userid->id)
                                        ->where('categoryId',$request->categoryId)
                                        ->where('subCategoryId',$request->subCategoryId)->first();
        if($checservice){
            $checservice->delete();
        }

        
        $add= new Doctor_service;
        $add->doctorId  =$userid->id;
        // dd($userid);
        $add->categoryId  = $request->categoryId;
        $add->subCategoryId  = $request->subCategoryId;
        $add->price  = $request->price;
        $add->gender  = $request->gender;
        $add->save();
        // $doctor_id=Auth::user()->id;

        // $checservice = Doctor_service::where('doctorId',$doctor_id)->first();
        // if($checservice){
        //     $checservice->delete();
        // }
        
        // $length = count($request->subCategoryId);
        //         if($length > 0)
        //         {
        //             for($i=0; $i<$length; $i++)
        //            {
        //             $add = new Doctor_service;
        //             $add->doctorId    = $request->doctorId;
        //             $add->categoryId  = $request->categoryId;
        //             $add->subCategoryId  = $request->subCategoryId[$i];
        //             $add->price  = $request->price[$i];
        //             $add->gender  = $request->gender[$i];
        //             $add->save();
        //            }
                   
        //         }
        
        return redirect()->back()->with("message", 'تم الإضافة بنجاح');
    }  

    public function edit(Doctor_service $service)
    {
        // dd($service->id);
        return view('doctors.services.edit',compact('service'));
    }

    public function update(Request $request,Doctor_service $service)
    {
        $edit = Doctor_service::findOrFail($service->id);
        
        $edit->price  = $request->price;
        $edit->gender  = $request->gender;
        $edit->save();

        return redirect()->route('services.index')->with("message", 'تم التعديل بنجاح'); 
    }
  
    public function destroy(Request $request )
    {

        $delete = Doctor_service::findOrFail($request->id);
        $delete->delete();
        return redirect()->route('services.index')->with("message",'تم الحذف بنجاح');

    } 
}