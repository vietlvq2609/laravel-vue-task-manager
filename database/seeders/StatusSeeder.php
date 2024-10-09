<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            ['name' => 'To Do', 'description' => 'Tasks that need to be done'],
            ['name' => 'In Progress', 'description' => 'Tasks that are currently being worked on'],
            ['name' => 'In Review', 'description' => 'Tasks that are under review'],
            ['name' => 'Done', 'description' => 'Completed tasks'],
        ]);
    }
}
