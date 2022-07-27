<?php

namespace App\Imports;

use App\Mongo_que;
use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\ToCollection;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

// use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Support\Facades\Validator;



class questionImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */


    public function collection(Collection  $rows)
    {



Validator::make($rows->toArray(), [
            
            
            '*.2' => ['required' ,'max:500'],
            '*.3' => ['required' ,'max:500' ],
            '*.4' => ['required' ,'max:500' ],
            '*.5' => ['required' ,'max:500' ],
            '*.6' => ['required' ,'max:500' ],
            '*.7' => ['required' ,'max:500'],
            '*.8' => ['required' ,'max:500'],
            '*.9' => ['nullable','max:5000'],

         ])->validate();
        

        
foreach ($rows as $row) {


    if (!isset($row[0])) {
        return null;
    }


        Mongo_que::create([
            //
            // '_id'=>$row[0],
             'exam_id'=>$row[1],
             'question' => $row[2],
             'images'=> $row[3],
             'option_1' => $row[4],
             'option_2' => $row[5],
             'option_3' => $row[6],
             'option_4' => $row[7],
             'correct_ans'=> $row[8],
             'mark_que_1'=> $row[9],
             'unit_name'=> $row[10]
             //'images'=> $row[10]

             //  'exam_id'=>$row[2],
             // 'question' => $row[3],
             // 'images'=> $row[4],
             // 'option_1' => $row[5],
             // 'option_2' => $row[6],
             // 'option_3' => $row[7],
             // 'option_4' => $row[8],
             // 'correct_ans'=> $row[9],
             // 'mark_que_1'=> ($row[10]),
             // 'unit_name'=> ($row[11])
        ]);
    }
}

}