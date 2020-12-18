<?php

namespace App\Exports;

use App\Models\Department;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DepartmentsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Department::orderBy('name')->get();
    }

    /**
    * @var Department $department
    */
    public function map($department): array
    {
        return [
            $department->name,
            $department->description,
            $department->status,
            $department->created_at->toDateString(),
        ];
    }

    public function headings(): array
    {
        return [
            'Name',
            'Description',
            'Status',
            'Date',
        ];
    }
}
