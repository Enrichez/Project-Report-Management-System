<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'role' => 'admin',
            'password' => bcrypt('Admin123!'),
        ]);
        User::create([
            'name' => 'Project Manager',
            'email' => 'manager@gmail.com',
            'role' => 'supervisor',
            'password' => bcrypt('Manager123!'),
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('Admin123'),
        ]);
    }
}
