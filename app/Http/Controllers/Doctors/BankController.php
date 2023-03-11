<?php

namespace App\Http\Controllers\Doctors;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Gate;
use App\Bank;
class BankController extends Controller
{
    
    public function index()
    {
        // dd('dddd');
        $banks=Bank::all();
        return view('doctors.banks',compact('banks'));
    }

}
