<?php

namespace App\Exports;

use App\Mongo_que;
use Maatwebsite\Excel\Concerns\FromCollection;



class questionExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Mongo_que::all();
    }
}
