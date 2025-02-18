<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clear the Table
        DB::table('users')->delete();

        \App\Models\User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            // 'username' => 'Admin',
            'password' => Hash::make('12345678'),
        ]);


        
    }
}
