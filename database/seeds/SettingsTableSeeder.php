<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'site_name' => 'Hospital',
            'site_email' => 'hospital@app.com',
            'stablish_date' => Carbon::now()->toDateTimeString(),
        ]);
    }
}
