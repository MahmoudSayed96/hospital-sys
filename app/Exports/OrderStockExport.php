<?php

namespace App\Exports;

use App\Models\OrderStock;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrderStockExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return OrderStock::all();
    }
}
