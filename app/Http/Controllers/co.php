<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\co_curr;
use DB;
use Illuminate\Support\Collection;

class co extends Controller
{ 
    function index()
    {
        return view('co');
    }


    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
             $data = co_curr::orderBy('id', 'asc')->get();
                    echo json_encode($data); 
        }
    }

    function add_data(Request $request)
    {
        

$data = \Validator::make($request->all(), [
    
            'stu_id' => 'required'
           
        ]);
     
        if ($data->passes()) {

          co_curr::create($request->all());
           echo '<div class="alert alert-success">Data Inserted</div>';
        }
        else{
      echo '<div class="alert alert-danger">Enter Proper Credentials</div>';
       }
  }



    function update_data(Request $request)
    {
        if($request->ajax())
        {
            $data = array(
                $request->column_name => $request->column_value
            );
                co_curr::where('id', $request->id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }

    }
        
        

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
                 co_curr::where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }

}
