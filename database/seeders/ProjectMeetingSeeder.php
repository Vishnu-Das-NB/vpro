<?php

namespace Database\Seeders;

use App\Models\ProjectMeeting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectMeetingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProjectMeeting::factory()->count(10)->create();

    }
}
