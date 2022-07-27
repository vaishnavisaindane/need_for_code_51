<?php

namespace App\Imports;

use App\student;

use Illuminate\Support\Collection;

use Maatwebsite\Excel\Concerns\ToCollection;

use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

// use Maatwebsite\Excel\Concerns\WithChunkReading;
use Illuminate\Support\Facades\Validator;



class studentImport implements ToCollection {

    // use Importable, SkipsErrors;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    




    public function collection(Collection  $rows)
    {



Validator::make($rows->toArray(), [
            
            // '*.2' => ['required'  ],
            '*.3' => ['required'],
            // '*.4' => ['required' ],
            // '*.5' => ['required'],
            // '*.6' => ['required'  ],
            // '*.7' => ['required' ],
            // '*.8' => ['required' ],
            // '*.9' => ['required' ],
            // '*.10' => ['required' ],

         ])->validate();
        

        
foreach ($rows as $row) {


    if (!isset($row[0])) {
        return null;
    }


        student::create([
            //
            'stu_id'  => $row[0],
             'name'     => $row[1],
             'std'  => $row[2],
             'email'     => $row[3],
             'roll'     => $row[4],
             'login_pass'     => $row[5],
             'month'     => $row[6],
             'year'     => $row[7],
             'present'     => $row[8],
             'working' => $row[9],
            
             // 'stu_id'  => $row[1],
             // 'name'     => json_encode($row[2]),
             // 'std'  => $row[3],
             // 'email'     => $row[4],
             // 'roll'     => $row[5],
             // 'login_pass'     => $row[6],
             // 'month'     => json_encode($row[7]),
             // 'year'     => json_encode($row[8]),
             // 'present'     => $row[9],
             // 'working' => $row[10],
             //'login_status' => $row[10]

        ]);
    }
    }

    


    
}
