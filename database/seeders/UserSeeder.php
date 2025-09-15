<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'car6006',
            'email' => 'car6006@gmail.com',
            'password' => Hash::make('P@ssword1234'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
