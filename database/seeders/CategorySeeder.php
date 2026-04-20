<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
   
    public function run(): void
    {
        DB::table('categories')->insert([
            ['category' => 'Novel'],
            ['category' => 'Komik'],
            ['category' => 'Teknologi'],
            ['category' => 'Sejarah'],
        ]);
    }
}
