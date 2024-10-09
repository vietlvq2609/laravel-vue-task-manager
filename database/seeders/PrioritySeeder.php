<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('priorities')->insert([
            ['name' => 'Low', 'description' => 'Low priority tasks'],
            ['name' => 'Medium', 'description' => 'Medium priority tasks'],
            ['name' => 'High', 'description' => 'High priority tasks'],
            ['name' => 'Critical', 'description' => 'Critical tasks that need immediate attention'],
        ]);
    }
}
