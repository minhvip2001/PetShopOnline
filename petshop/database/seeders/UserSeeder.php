<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
            'surname' => 'Nguyễn',
            'name' => 'Minh',
            'email' => 'minh@gmail.com',
            'phone' => '0395445571',
            'password' => Hash::make('password'),
            'created_at' => now(),
		    'updated_at' => now(),
		    'email_verified_at' => now(),
            ],
            [
            'surname' => 'Nguyễn',   
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '0315445571',
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
            'email_verified_at' => now(),
            ],
            [
            'surname' => 'Nguyễn',   
            'name' => 'normal',
		    'email' => 'normal@gmail.com',
            'phone' => '0395345571',
            'password' => Hash::make('password'),
		    'created_at' => now(),
		    'updated_at' => now(),
		    'email_verified_at' => now(),
            ]
        ]);
       
        
    }
}
