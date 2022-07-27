<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApiCode;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Password;
use Auth;
use Hash;
use Session;
use App\admin;

class admin_controller extends Controller
{
 
  
   // admin registration 
    public function admin()
    {
        return view('ad_log_reg');
    }
    function admin_register(request $request)
   {          
     $request->validate([
        'username' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:admins',
          'password' => 'required|regex:/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/'
          
      ]);

      admin::create([
          'username' => $request->username,
          'email' => $request->email,
          //'email_verified_at' => null,
          'password' => Hash::make($request->password),
          ////'department'=>$request->department,
          //'ph_no'=>$request->ph_no,
          

      ]);

      return redirect('/ad_log_reg');
       
      }
          
   // admin login
    // public function admin_login_sub(request $req)
    // {
         
    //     $req->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //   ]);
    //     $credentials = $req->only('email', 'password');



    //     if (Auth::attempt($credentials)) {
    //       Session::put('admin_email',$req->email);

    //         return redirect()->intended('/sidebar');
    //     }

    //     return redirect('/ad_log_reg')->with('error', 'Oppes! You have entered invalid credentials');

    //   }

public function admin_login_sub(request $request)
    {
         
      $request->validate([
            'email' => 'required',
            'password' => 'required',
      ]);
         $resp=admin::where('email',$request->email)->where('password',$request->password)->get();
                  if($resp){
      // $credentials = $request->only('email', 'password');
      // if (Auth::attempt($credentials)) {
      //     Session::put('admin_email',$request->email);
      
            // $request->session()->put('admin_email',$request->email);
            return redirect('/sidebar');
        }
        else 
        {
        

  return redirect('/ad_log_reg')->with('error', 'Oppes! You have entered invalid credentials');

}

      }
    public function ad_logout() {
      Auth::logout();
      Session::forget('admin_email');
      return redirect('/ad_log_reg');
    }

 }