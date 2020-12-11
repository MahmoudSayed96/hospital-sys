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
            'email' => 'super_admin@app.com',
            'password' => bcrypt('admin@123')
        ]);
        $admin->attachRole('super_admin');
        $user = \App\User::create([
            'name'=>'Doctor',
            'email' => 'doctor@app.com',
            'password' => bcrypt('doctor@123')
        ]);
        $user->attachRole('doctor');
    }
}
