<?php

namespace App\Http\Controllers\Vendors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Gate;
use App\Bank;
class BankController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     // $this->middleware('permission:categories', ['only' => ['index']]);
    //     // $this->middleware('permission:اضافة صلاحية', ['only' => ['create','store']]);
    //     // $this->middleware('permission:تعديل صلاحية', ['only' => ['edit','update']]);
    //     // $this->middleware('permission:حذف صلاحية', ['only' => ['destroy']]);
    // }

    public function index()
    {
        // dd('dddd');
        $banks=Bank::all();
        return view('vendors.banks',compact('banks'));
    }

}
