<?php

namespace App\Imports;

use App\examination;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class examinationImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new examination([
            //
            'exam_id'     => $row[0],
            'sub_id'    => $row[1],
            'exam_sub_name' => $row[2],
            'dept_id' => $row[3],
            'dept_name' => $row[4],
            'date' => $row[5],
            'time' => $row[6],
            'endtime' => $row[7],
            'duration' => $row[8],
            'total_marks' => $row[9],
            'cate_id' => $row[10],
            'cate_name' => $row[11],
            'status' => $row[12],
        ]);
    }
}

