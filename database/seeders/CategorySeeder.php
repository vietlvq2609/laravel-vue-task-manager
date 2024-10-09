<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Bug', 'description' => 'Issues or bugs in the project'],
            ['name' => 'Feature', 'description' => 'New features to be implemented'],
            ['name' => 'Improvement', 'description' => 'Improvements to existing features'],
            ['name' => 'Documentation', 'description' => 'Tasks related to documentation'],
        ]);
    }
}
