<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subject;
use App\student;
use App\co_curr;


class dashContro extends Controller
{
    
   public function totaldept(){
   		$data= student::all()->count();
          $data1= co_curr::all()->count();
         //$data2= Mongo_exam::all()->count();
         //$data3=M_student::all()->where('login_status','in')->count();
         


         return view('dashboard_admin')->with(compact('data', $data))->with(compact('data1', $data1));
         //->with(compact('data2', $data2))->with(compact('data3', $data3));


   }

   public function barchart(){
		$post1= co_curr::where('chess','10')->get()->count();
		$post2= co_curr::where('cricket','10')->get()->count();
		$post4= co_curr::where('art','20')->get()->count();
		$post5= co_curr::where('relay','10')->get()->count();
		$post3= co_curr::all()->count();

		   	
		   	// 		$data99= array
						// (
						// 	array("label"=> "Total", "y"=> $post3),
						// 	array("label"=> "Inactive", "y"=> $post2),
						// 	array("label"=> "Active (Logged in)", "y"=> $post1),
						//  );
		$data99= array
						(
							array("label"=> "chess", "y"=> $post1),
							array("label"=> "cricket", "y"=> $post2),
							array("label"=> "art", "y"=> $post4),
							array("label"=> "relay", "y"=> $post5),
						 );
		   	
return view('graph',['data99' => $data99]);
   }


}
