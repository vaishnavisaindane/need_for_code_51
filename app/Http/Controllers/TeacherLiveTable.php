<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\teacher;
use DB;

class TeacherLiveTable extends Controller
{ 
    function index()
    {
        return view('teacher_live_table');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
             $data =teacher::all();
                    echo json_encode($data); 
        }
    }

    function add_data(Request $request)
    {

        $data = \Validator::make($request->all(), [
    
                'u_name'    => 'required',
        ]);
     
        if ($data->passes()) {

          teacher::create($request->all());
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
                $request->column_name =>  $request->column_value
            );
            
             teacher::where('id', $request->id)
                 ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
                 teacher::where('id', $request->id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }

}

