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
use App\Patient;
use App\Order_sub_category;
use App\Order_product;

use App\Doctor_certificate;
use App\Doctor_bank;
use App\Doctor_education;
use App\Doctor_insurance;
use App\Doctor_language;
use App\Doctor_experience;
use App\Doctor_license;
use App\Member_ship_type;
use App\Doctor_case;
use App\Patient_location;
class OrderController extends Controller
{
    public function index()
    {   
        $userid = Auth::guard('doctors')->user();
        // dd($userid);
        $orders=Order::where('doctorId',$userid->id)->get();
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
        // dd($orders);
        return view('doctors.orders.all',compact('orders'));
    }

     public function orderDetails($orderId)
    {   

        // dd($orderId);
        $order=Order::findOrFail($orderId);
       
        $category=Category::where('id',$order->categoryId)->first();
        

        $patient=Patient::where('id',$order->patientId)->first();
        $patient->photo= "https://findfamily.net/care/assets_admin/img/patient/".$patient->photo;
            
        $doctor = Doctor::where('id',$order->doctorId)->first();
        if($doctor){
            $doctor->photo= "https://findfamily.net/care/assets_admin/img/doctors/photo/".$doctor->photo;
        }
            
        ///// subcategory
        $subcategory=[];
        $all_services_for_the_order=[];

        $doctor_service_price_total=0;

        $order_sub_category= Order_sub_category::where('orderId',$order->id)->get();

        foreach ($order_sub_category as $order_sub_category_item) { 
            $allservicess=Doctor_service::where('subCategoryId',$order_sub_category_item->subCategoryId)->first();
            if($allservicess !=null){
                $all_services_for_the_order[]=$allservicess;
            }
            if($order->doctorId !=null){
                $doctor_service_price = Doctor_service::where('doctorId',$order->doctorId)->where('subCategoryId',$order_sub_category_item->subCategoryId)->first();
                $doctor_service_price_total += Doctor_service::where('subCategoryId',$order_sub_category_item->subCategoryId)->sum('price');
            }else{
                $SubCategory_price = SubCategory::where('id',$order_sub_category_item->subCategoryId)->first();
                $doctor_service_price_total += SubCategory::where('id',$order_sub_category_item->subCategoryId)->sum('price');
            }  
            $subcategory[]=SubCategory::where("id",$order_sub_category_item->subCategoryId)->first();
            foreach ($subcategory as $subcategory_item) {  
                $subcategory_item->duration=$order_sub_category_item->duration;
                if($doctor_service_price){
                    $subcategory_item->price=$doctor_service_price->price;
                }
            }    
        }

        $alldoctors_for_this_services=[];
        // dd($all_services_for_the_order);
        foreach ($all_services_for_the_order as $all_services_for_the_order_item) { 
            $alldoctors_for_this_services[] = Doctor::where('id',$all_services_for_the_order_item->doctorId)->first();
        }
        

        ///// order Patient location  
            $patient_location=Patient_location::where('id',$order->patientlocationId)->get();
            foreach ($patient_location as $patient_location_item) {
                $country= Country::selection()->where('id',$patient_location_item->countryId)->first();
                if($country){
                    $patient_location_item->country=$country->name;
                }else{
                    $patient_location_item->country=null;
                }
                
                $city= City::selection()->where('id',$patient_location_item->cityId)->first();
                if($city){
                    $patient_location_item->city=$city->name;
                }else{
                    $patient_location_item->city=null;
                }
            }    

        return view('doctors.orders.order_details',compact('order','category','patient','subcategory','doctor_service_price_total','order_sub_category','alldoctors_for_this_services','patient_location'));
    
      
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
