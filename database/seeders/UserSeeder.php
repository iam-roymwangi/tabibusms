<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Super Admin (Full Access)
        User::create([
            'name' => 'Roy Admin',
            'email' => 'admin@tabibu.com',
            'password' => Hash::make('password'),
            'role' => 'super_admin',
        ]);

        // 2. Department Head (Restricted Access)
        User::create([
            'name' => 'Department Manager',
            'email' => 'manager@tabibu.com',
            'password' => Hash::make('password'),
            'role' => 'department_head',
        ]);

        // 3. Standard Client
        User::create([
            'name' => 'John Client',
            'email' => 'client@gmail.com',
            'password' => Hash::make('password'),
            'role' => 'client',
        ]);
    }
}