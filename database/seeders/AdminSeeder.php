<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@blogchain.com',
            'phone' => '01010101010',
            'role' => 'super_admin',
            'password' => Hash::make('SuperAdmin#12345678910')
        ]);
        Admin::create([
            'name' => 'Admin',
            'email' => 'admin@blogchain.com',
            'phone' => '01112131415',
            'role' => 'admin',
            'password' => Hash::make('Admin#12345678910')
        ]);
        Admin::create([
            'name' => 'Sub Admin',
            'email' => 'sub_admin@blogchain.com',
            'phone' => '01000000000',
            'role' => 'sub_admin',
            'password' => Hash::make('SubAdmin#12345678910')
        ]);
    }
}
