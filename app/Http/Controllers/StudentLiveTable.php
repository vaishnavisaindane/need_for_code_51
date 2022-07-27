<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\studentImport;
use App\Exports\studentExport;
use App\student;
use DB;

class StudentLiveTable extends Controller
{ 
    function index()
    {
        return view('student_live_table');
    }

    function fetch_data(Request $request)
    {
        if($request->ajax())
        {
             $data =student::all();
                    echo json_encode($data); 
        }
    }

    function add_data(Request $request)
    {

        $data = \Validator::make($request->all(), [
    
                'name'    => 'required',
                'std'    => 'numeric',
                'email'=>'required',
                'roll'=>'numeric',
                'login_pass'=>'numeric'
        ]);
     
        if ($data->passes()) {

          student::create($request->all());
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
            
             student::where('stu_id', $request->stu_id)
                 ->update($data);
            echo '<div class="alert alert-success">Data Updated</div>';
        }
    }

    function delete_data(Request $request)
    {
        if($request->ajax())
        {
                 student::where('stu_id', $request->stu_id)
                ->delete();
            echo '<div class="alert alert-success">Data Deleted</div>';
        }
    }

     public function fileImportExportque()
    {
       return view('file-import-stu');
    }
   
    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileImport(Request $request) 
    {
        $file= $request->file('file');
       
             Excel::import(new studentImport,$request->file('file'));


            return back()->withStatus('Excel file imported successfully');
            return back()->with(['danger'=>$Validator->errors()->all()]);
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function fileExport() 
    {
        return Excel::download(new studentExport, 'student-collection.xlsx');
    }    
    // public function std(){
    //     return view('std');
    // }
    public function disp()
    {
        $s=student::all();
        return view('std',["s"=> $s]);

        // $data= student::all();
        // return view('result',["data"=> $data]);
    }

}

