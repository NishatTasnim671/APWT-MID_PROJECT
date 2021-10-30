<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;

class StaffUpdateController extends Controller
{
    //
    function Update(Request $request)
    {
        $id = $request->id;
        $Systemuser = Systemuser::where('id',$id)->first();
        return view('Staff.StaffUpdate')->with('staff', $Systemuser);
    }

    function UpdateSubmit(Request $request){

        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:30',
                'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'address'=>'required',
                'password'=>'required|min:6',
                'phone'=>'required|min:11'
                


            ],
            [
                'name.required'=>'Please Enter Your Name',
                'name.min'=>'Name must be greater than 2 charcters',
               
                'address.required'=>'Address Needed',
                'phone.required'=>'Phone Number Needed!!',
                'phone.min'=>'Phone number not valid',
               
                'email.required'=>'Email required !',
                'email.regex'=>'Email Formate is invalid!',
                'password.required'=>'Password required !',
                'password.min'=>'Minimum 6 character required !'
            ]
        );
        $var = new Systemuser();
        $var = Systemuser::where('id',Session()->get('staff_id'))->first();
        $var->U_Name= $request->name;
        $var->U_phone=$request->phone;
        $var->U_address = $request->address;
        $var->U_username= $request->username;
        $var->U_email = $request->email;
        $var->U_password = $request->password;
        $var->Usertype='staff';
        $var->U_profileimg=$request->profileimg;
        $var->save();
    

        return redirect()->route('staffDash');
    

    }
}
