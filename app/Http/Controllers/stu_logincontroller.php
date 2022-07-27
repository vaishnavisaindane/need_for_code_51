<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\student;

class stu_logincontroller extends Controller
{
     public function login()
    {
        return view('login');
    }
    public function login_sub(Request $request)
    {

         $request->validate([
            'roll' => 'required  ',
            'login_pass'=> 'required'
     
              

        ]);


        $resp=student::where('roll',$request->roll)->where('login_pass',$request->login_pass)->get()->first();
        
        
        if($resp)
        {
            $request->session()->put('roll',$resp->roll);
            return redirect('result');
        }
        else 
        {
            return redirect('loginfail');   
        }
         
        
    }

 public function redirect()

    {
        return redirect('login_stu');
    }
 
}
