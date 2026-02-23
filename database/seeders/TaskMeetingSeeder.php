<?php

namespace Database\Seeders;

use App\Models\TaskMeeting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskMeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskMeeting::factory()->count(10)->create();
    }
}
