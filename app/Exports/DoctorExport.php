<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DoctorExport implements FromCollection, WithMapping, WithHeadings
{
/**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::orderBy('id', 'desc')->get();
    }

     /**
    * @var User $doctor
    */
    public function map($doctor): array
    {
        return [
            $doctor->name,
            $doctor->username,
            $doctor->email, 
            $doctor->date_of_birth,
            $doctor->phone, 
            $doctor->governorate->name, 
            $doctor->city->name,
            $doctor->department->name,
            $doctor->specialist->name,
            $doctor->degree, 
            $doctor->gender, 
            $doctor->salary,
        ];
    }

    public function headings(): array
    {
        return [
            'Name',
            'Username',
            'Email', 
            'Date Of Birth',
            'Phone', 
            'Governorate', 
            'City',
            'Department',
            'Specialist',
            'Degree', 
            'Gender', 
            'Salary',
        ];
    }
}
