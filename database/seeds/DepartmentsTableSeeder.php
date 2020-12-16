<?php

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments_names = ['Admissions','Breast Screening','Cardiology','Chaplaincy','Critical Care'];
        $departments_desc = [
            'At the Admitting Department, the patient will be required to provide personal information and sign consent forms before being taken to the hospital unit or ward. If the individual is critically ill, then, this information is usually obtained from a family member.',
            'Screens women for breast cancer and is usually linked to the X-ray or radiology department.',
            'Provides medical care to patients who have problems with their heart or circulation.',
            'Chaplains promote the spiritual and pastoral wellbeing of patients, relatives and staff.',
            'Also called intensive care, this department is for seriously ill patients'
        ];
        for($i=0; $i < count($departments_names); $i++) {
            \App\Models\Department::create([
                'name' => $departments_names[$i],
                'description' => $departments_desc[$i],
                'status' => 1
            ]);
        }
    }
}
