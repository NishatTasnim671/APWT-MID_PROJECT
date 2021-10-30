<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Myorder;
use App\Models\Orderdetail;


class OrderController extends Controller
{
    //
    public function order()
    {
        $Myorder=Myorder::where('O_status','0')->get();
        return view('Staff.Showorder')->with('Myorder', $Myorder);
    }
    
    
   
    
}
