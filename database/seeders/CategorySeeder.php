<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Ordinateurs',
                'slug' => 'ordinateurs',
                'description' => 'Ordinateurs portables et de bureau',
                'is_active' => true,
            ],
            [
                'name' => 'Périphériques',
                'slug' => 'peripheriques',
                'description' => 'Claviers, souris, écrans et autres périphériques',
                'is_active' => true,
            ],
            [
                'name' => 'Stockage',
                'slug' => 'stockage',
                'description' => 'SSD, disques durs et solutions de stockage',
                'is_active' => true,
            ],
            [
                'name' => 'Audio',
                'slug' => 'audio',
                'description' => 'Casques, enceintes et équipements audio',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
