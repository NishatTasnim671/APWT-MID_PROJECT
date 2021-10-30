<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Systemuser;

class LoginValidation extends Controller
{
    //
    function login()
    {
        return view('Staff.login');
    }


    function loginSubmit(Request $request)
    {
        $this->validate(
            $request,
            [
                'username'=>'required',
                'password'=>'required|min:6',
            ],
            [
                'username.required'=>'Username is required !',
                'password.required'=>'Password required !',
                'password.min'=>'Minimum 6 character required !'
            ]
        );




     $Systemuser=Systemuser::where('U_username',$request->username)
                            ->where('U_password',$request->password)
                            ->first();
    
    
   



        if($Systemuser)
        {
            $request->session()->put('staff_id',$Systemuser->id);
            $request->session()->put('staff_username',$Systemuser->U_username);
            return redirect()->route('staffDash');
        }

        else{
            return("Account not found");
        }

    }



    public function logout(){
        session()->forget('staff_id');
        return redirect()->route('login');
    }




    public function staffDash(){

         $Systemuser=Systemuser::where('id',Session()->get('staff_id'))->first();

         return view('Dashboard')->with('Systemuser',$Systemuser);
    }

    public function staffProfile(){

        $Systemuser=Systemuser::where('id',Session()->get('staff_id'))->first();

        return view('Profile')->with('Systemuser',$Systemuser);
   }


    

}
