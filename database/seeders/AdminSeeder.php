<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // clear the Table
        DB::table('admins')->delete();

        \App\Models\Admin::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            // 'username' => 'Admin',
            'password' => Hash::make('12345678'),
        ]);


        
    }
}
