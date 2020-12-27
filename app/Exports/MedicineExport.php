<?php

namespace App\Exports;

use App\Models\Medicine;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MedicineExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Medicine::orderBy('id', 'desc')->get();
    }

     /**
    * @var Medicine $medicine
    */
    public function map($medicine): array
    {
        return [
            $medicine->name,
            $medicine->price,
            $medicine->quantity,
            $medicine->expire_date,
            $medicine->status,
        ];
    }

    public function headings(): array
    {
        return [
            'Name',
            'Price',
            'Quantity',
            'Expire Date',
            'Status',
        ];
    }
}
