<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Gate;
use App\Bank;
class BankController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('permission:categories', ['only' => ['index']]);
        // $this->middleware('permission:اضافة صلاحية', ['only' => ['create','store']]);
        // $this->middleware('permission:تعديل صلاحية', ['only' => ['edit','update']]);
        // $this->middleware('permission:حذف صلاحية', ['only' => ['destroy']]);
    }

    public function index()
    {
        // dd('dddd');
        $banks=Bank::all();
        return view('admin.banks.all',compact('banks'));
    }

    public function create()
    {
        return view('admin.banks.create');
    }

    
    public function store(Request $request)
    {
        
        $add = new Bank;
        $add->name    = $request->name;
        $add->name_acount  = $request->name_acount;
        $add->number    = $request->number;
        $add->swift_code  = $request->swift_code;
        $add->iban    = $request->iban;
        $add->save();


 
        return redirect()->back()->with("message", 'تم الإضافة بنجاح'); 
    }

    
    public function edit(Bank $bank)
    {
        return view('admin.banks.edit',compact('bank'));
    }

    public function update(Request $request)
    {
        $edit = Bank::findOrFail($request->id);
        $edit->name  = $request->name;
        $edit->name_acount    = $request->name_acount;
        $edit->number    = $request->number;
        $edit->swift_code  = $request->swift_code;
        $edit->iban    = $request->iban;
        $edit->save();
        return redirect()->back()->with("message", 'تم التعديل بنجاح'); 
    }


    public function destroy(Request $request )
    {
        
            $delete = Bank::findOrFail($request->id);
            $delete->delete();
            return redirect()->back()->with("message",'تم الحذف بنجاح'); 
            
    } 
}
