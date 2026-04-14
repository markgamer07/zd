<?php

use Illuminate\Support\Facades\DB; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; 
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    
   public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('12345'),
            'age' => rand(18, 60),
            'salary' => rand(1000, 5000),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
