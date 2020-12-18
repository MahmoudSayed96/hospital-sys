<?php

namespace App\Exports;

use App\Models\Specialist;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SpecialistsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Specialist::orderBy('name')->get();
    }

    /**
    * @var Specialist $specialist
    */
    public function map($specialist): array
    {
        return [
            $specialist->name,
        ];
    }

    public function headings(): array
    {
        return [
            'Name',
        ];
    }
}
