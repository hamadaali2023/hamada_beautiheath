<?php

namespace App\Http\Controllers\Vendors;
use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Vendor;
use App\Patient_location;
use App\Category;
use Hash;
use Auth;
use Illuminate\Support\Str;
use DB;
use Mail;
use App\City;
use App\Country;
use App\Patient;
use App\Order_product;
use App\Product;
class OrderController extends Controller
{
    public function index()
    {   
        $userid = Auth::guard('vendors')->user();
        // dd($userid);
        $orders=Order::where('vendorId',$userid->id)->get();
        foreach($orders as $item){
            $item->category=Category::where('id',$item->categoryId)->first();

            $patient=Patient::where('id',$item->patientId)->first();
            $patient->photo= "https://findfamily.net/care/assets_admin/img/patient/".$patient->photo;
            $item->patient=$patient;
            $vendor = Vendor::where('id',$item->vendorId)->first();
            if($vendor){
                $vendor->photo= "https://findfamily.net/care/assets_admin/img/vendors/photo/".$vendor->photo;
            }
            $item->vendor=$vendor;
            
        ////// product
            $products=[];
            $order_product= Order_product::where('orderId',$item->id)->get();                     
            foreach ($order_product as $order_product_item) {  
                $products[]=Product::where("id" , $order_product_item->orderProductId)->first();
            }
            foreach ($products as $product_item) {
                $product_item->image="https://findfamily.net/care/assets_admin/img/products/".$product_item->image;
            }
            $item->products=$products;
            
       
        }
        // dd($orders);
        return view('vendors.orders.all',compact('orders'));
    }
    public function orderDetails($orderId)
    {   

        // dd($orderId);
        $order=Order::findOrFail($orderId);
       
        $category=Category::where('id',$order->categoryId)->first();
        

        $patient=Patient::where('id',$order->patientId)->first();
        $patient->photo= "https://findfamily.net/care/assets_admin/img/patient/".$patient->photo;
            
        $doctor = Vendor::where('id',$order->vendorId)->first();
        if($doctor){
            $doctor->photo= "https://findfamily.net/care/assets_admin/img/doctors/photo/".$doctor->photo;
        }
            
      
        ////// product
        $products=[];
        $order_product= Order_product::where('orderId',$order->id)->get();                     
        foreach ($order_product as $order_product_item) {  
            $products[]=Product::where("id" , $order_product_item->orderProductId)->first();
        }
        foreach ($products as $product_item) {
            $product_item->image="https://findfamily.net/care/assets_admin/img/products/".$product_item->image;
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
            // dd($products);
        return view('vendors.orders.order-details',compact('order','patient','products','patient_location'));
    
        /// order people_under_care    
            // $item->people_under_care=People_under_care::where('id',$item->patientUnderCareId)->first();
            
            
        ////////// order image    
            // $item->order_image=Order_image::where('orderId',$item->id)->get();
              
            
        
        // dd($orders);
        // return $this -> returnData(
        //     'data',$orders
        // );
        
    }
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
