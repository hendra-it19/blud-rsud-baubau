<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Super Admin',
            'username' => 'superadmin',
            'password' => Hash::make('super123'),
            'is_superadmin' => true,
        ]);
        User::create([
            'nama' => 'Admin Gones',
            'username' => 'admin',
            'password' => Hash::make('admin123'),
            'is_superadmin' => false,
        ]);
    }
}
