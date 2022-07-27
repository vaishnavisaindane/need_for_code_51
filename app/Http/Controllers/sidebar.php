<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sidebar extends Controller
{
    //
   //  public function __construct(){
   //  $this->middleware('auth');
   // } 
  
   // admin registration and login
    public function sidebar()
    {
        return view('sidebar');
    }
    public function sidebar2()
    {
        return view('sidebar2');
    }
}
