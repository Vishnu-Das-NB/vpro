<?php

namespace Database\Seeders;

use App\Models\TaskLogs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskLogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskLogs::factory()->count(10)->create();
    }
}
