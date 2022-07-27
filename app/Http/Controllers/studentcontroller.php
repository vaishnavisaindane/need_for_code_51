<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\studentImport;
use App\Exports\studentExport;

class studentcontroller extends Controller
{
    /**
    * @return \Illuminate\Support\Collection
    */
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

}
