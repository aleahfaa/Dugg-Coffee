<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
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
            'email' => 'admin@duggcoffee.com',
            'password' => Hash::make('admin123'), // Change this password in production
        ]);

        // You can add more admins here if needed
        Admin::create([
            'name' => 'News Manager',
            'email' => 'newsmanager@duggcoffee.com',
            'password' => Hash::make('manager123'),
        ]);
    }
}