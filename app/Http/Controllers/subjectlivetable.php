<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\subject;
use DB;
use Illuminate\Support\Collection;

class subjectlivetable extends Controller
{ 
    function index()
    {
        return view('subject_live_table');
    }



    //search function
    // public function search(Request $request)
    //     {
    //         if($request->ajax())
    //         {
    //         $output="";


    //         $search_data=M_dept::where('dept_name','LIKE','%'.$request->search."%")->orWhere('dept_id','LIKE','%'.$request->search."%")->orWhere('dept_status','LIKE','%'.$request->search."%")->get();
    //         if($search_data)
    //         {

    //         $output.='<tr>'.

    //             '<td contenteditable="true" id="dept_id"></td>'.
    //             '<td contenteditable="true" id="dept_name"></td>'.
    //             '<td ><select id="dept_status" style="height:41px;width:150px;border:0px none;background-color:#F8F8F8"><option value="" disabled="disabled" selected>Select</option><option value="active">active</option><option  value="inactive">inactive</option></select></td>'.
    //             '<td><button type="button" class="btn btn-success btn-xs" id="add">Add</button></td></tr>'.

    //         '<tr>';
    //         foreach ($search_data as $key => $sd) {
    //         $output.='<tr>'.
    //         '<td class="column_name" data-column_name="dept_id" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_id.'</td>'.
    //         '<td class="column_name" data-column_name="dept_name" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_name.'</td>'.
    //         '<td class="column_name" data-column_name="dept_status" data-dept_id="'.$sd->dept_id.'">'.$sd->dept_status.'</td>'.
    //         '<td><button type="button" class="btn btn-danger btn-xs delete" dept_id="'.$sd->dept_id.'">Delete</button></td>'.
              
    //         '</tr>';
    //         }

    //          return Response($output);
    //            }

    //             }
    //     }




    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
             $data = subject::orderBy('sub_id', 'asc')->get();
                    echo json_encode($data); 
        }
    }

    function add_data(Request $request)
    {
        

$data = \Validator::make($request->all(), [
    
            'stu_id' => 'required',
            'std' =>'required',
            'eng' =>'required',
            'hin' =>'required',
            'mar' =>'required',
            'ss' =>'required',
            'total' =>'required',
            'obtained' =>'required'
        ]);
     
        if ($data->passes()) {

          subject::create($request->all());
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
                subject::where('sub_id', $request->sub_id)
                ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }

    }
        
        

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
                 subject::where('sub_id', $request->sub_id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }

}
