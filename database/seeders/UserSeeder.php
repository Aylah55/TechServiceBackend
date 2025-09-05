<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin par défaut
        \App\Models\User::create([
            'name' => 'Administrateur TechService',
            'email' => 'admin@techservice.com',
            'password' => \Illuminate\Support\Facades\Hash::make('admin123'),
            'role' => 'admin',
            'company_name' => 'TechService',
            'phone' => '0123456789',
            'address' => '123 Rue de la Tech',
            'is_vendor_approved' => true,
        ]);
    }
}
