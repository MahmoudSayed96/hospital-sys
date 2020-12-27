<?php

use Illuminate\Database\Seeder;

class GovernoratesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $governorates_names = [
            'Cairo',
            'Giza',
            'Alexandria',
            'Dakahlia',
            'Red Sea',
            'Beheira',
            'Fayoum',
            'Gharbiya',
            'Ismailia',
            'Monofia',
            'Minya',
            'Qaliubiya',
            'New Valley',
            'Suez',
            'Aswan',
            'Assiut',
            'Beni Suef',
            'Port Said',
            'Damietta',
            'Sharkia',
            'South Sinai',
            'Kafr Al sheikh',
            'Matrouh',
            'Luxor',
            'Qena',
            'North Sinai',
            'Sohag',
        ];

        foreach ($governorates_names as $name) {
           $governorates[] = [
               'name' => $name
           ];
        }

        \App\Models\Governorate::insert($governorates);
    }
}
