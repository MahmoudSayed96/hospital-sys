<?php

use Illuminate\Database\Seeder;

class SpecialistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialists_names = ['Dermatologists','Ophthalmologists','Obstetrician/gynecologists','Cardiologists','Endocrinologists'];
        foreach ($specialists_names as $value) {
            $specialists[] = [
                'name' => $value 
            ];
        }
        App\Models\Specialist::insert($specialists);
    }
}
