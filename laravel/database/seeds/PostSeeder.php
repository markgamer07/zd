<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Test post',
            'slug' => Str::random(10),
            'text' => 'Some text',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
