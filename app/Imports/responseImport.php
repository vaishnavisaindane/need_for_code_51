<?php

namespace App\Imports;

use App\M_response;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class responseImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection  $rows)
    {
        foreach ($rows as $row) {
        M_response::create([
             
             'stu_roll'     => json_encode($row[1]),
             'stu_name'     => $row[2],
             'yes_ans'     => json_encode($row[3]),
             'no_ans'     => json_encode($row[4]),
             'result_json'     => $row[5],
             'dept_id'     => $row[6],
             'sub_id'     => $row[7],
             'exam_id'     => json_encode($row[8]),
            
                 
        ]);
    }
}

        public function startRow(): int
    {
        return 2;
    }
}