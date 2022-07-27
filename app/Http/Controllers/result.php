<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\student;
use App\co_curr;
use App\subject;

class result extends Controller
{
	function fetchresult(){
	
		$data= student::all()->where('roll',session('roll'));
        
        $data2=co_curr::all()->where('stu_id',session('roll'));

		$data3=subject::all()->where('stu_id',Session('roll'));

		return view('result', compact(['data2', 'data3','data',]));
}


}