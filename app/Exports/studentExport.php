<?php

namespace App\Exports;

use App\student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\LaravelNovaExcel\Actions\DownloadExcel;

class studentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */





    public function collection()
    {
        
        return student::all();


    }


// https://youtu.be/us2zb1Lxyyw
    // https://www.youtube.com/watch?v=am7xJ98OOiA
 
    
     public function headings(): array

    {

        return [
            'Primary key',
            'name',
            'std',
            'email',
            'roll',
            'login_pass',
            'month',
            'year',
            'present',
            'working'
            
        ];

    }
}
