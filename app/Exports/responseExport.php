<?php

namespace App\Exports;

use App\M_response;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class responseExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

  public function collection()
    {

        return M_response::all();

    }


     public function headings(): array

    {

        return [
            'Sr.no',
            'Stu roll',
            'Stu name',
            'obtained marks',
            'wrong ans(marks)',
            'Stu response',
            'dept',
            'Sub',
            'Exam ID',
            

        ];

    }
}
