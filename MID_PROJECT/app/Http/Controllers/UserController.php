<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;

class UserController extends Controller
{
    //
    
    function Home()
    {
        return view('Home');
    }

    function Dashboard()
    {
        return view('Dashboard');
    }


    function Registration()
    {
        return view('Staff.Registration');
    }

    function RegistrationSubmit(Request $request)
    {
        $this->validate(
            $request,
            [
                'name'=>'required|min:3|max:20',
                'phone'=>'required|min:11',
                'address'=>'required',
                'username'=>'required|min:3',
                'email'=>'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'password'=>'required|min:6'
                


            ],
            [
                'username.required'=>'Username required !',
                'username.min'=>'Username must be greater than 3 charcters',
                'name.required'=>'Please Enter Your Name',
                'name.min'=>'Name must be greater than 3 charcters',
                'name.max'=>'Name must be smaller than 20 charcters',
                'address.required'=>'Address Needed',
                'phone.required'=>'Phone Number Needed!!',
                'phone.min'=>'Phone number is not valid',
                'email.required'=>'Email required !',
                'email.regex'=>'Email Formate is invalid!',
                'password.required'=>'Password required !',
                'password.min'=>'Minimum 6 character required !'



    
    
            ]
        );
        $var = new Systemuser();
        $var->U_Name= $request->name;
        $var->U_phone=$request->phone;
        $var->U_address = $request->address;
        $var->U_username= $request->username;
        $var->U_email = $request->email;
        $var->U_password = $request->password;
        $var->Usertype='staff';
        $var->U_profileimg=$request->profileimg;
        $var->save();
    

        return redirect()->route('login');
    
      
    }



    
}
