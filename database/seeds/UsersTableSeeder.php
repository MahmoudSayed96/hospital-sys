<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\User::create([
            'name'=>'Admin',
            'username'=>'admin',
            'email' => 'admin@app.com',
            'password' => 'admin@123',
            'department_id' => 1, 
            'specialist_id' => 1,
            'salary' => 10000,
            'phone' => '01144065554',
            'governorate_id' =>16,
            'city_id' => 193
        ]);
        $admin->attachRole('admin');
    }
}
