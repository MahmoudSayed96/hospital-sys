<?php

namespace App\Exports;

use App\Models\Stock;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StockExport implements FromCollection, WithMapping, WithHeadings
{
   /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Stock::orderBy('id', 'desc')->get();
    }

    /**
    * @var Stock $stock
    */
    public function map($stock): array
    {
        return [
            $stock->name,
            $stock->quantity,
            $stock->price,
            $stock->type,
            $stock->serial_no,
        ];
    }

    public function headings(): array
    {
        return [
            'Name',
            'Quantity',
            'Price',
            'Type',
            'Serial No',
        ];
    }
}
