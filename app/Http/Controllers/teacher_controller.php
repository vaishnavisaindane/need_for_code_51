<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\teacher;

class teacher_controller extends Controller
{
     public function teacher()
    {
        return view('teacher');
    }
    public function teacher_login_sub(request $request)
    {
         
      $request->validate([
            'email' => 'required',
        
      ]);
         $resp=teacher::where('email',$request->email)->where('password',$request->password)->get();
                  if($resp){
    
            return redirect('/sidebar2');
        }
        else       {
        

  return redirect('/teacher')->with('error', 'Oppes! You have entered invalid credentials');

}
 
}
}