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
        $user = \App\User::create([
            'name'=>'Admin',
            'email' => 'super_admin@app.com',
            'password' => bcrypt('admin@123')
        ]);
        $user->attachRole('super_admin');
    }
}
