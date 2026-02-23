<?php

namespace Database\Factories;

use App\Models\Meeting;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectMeeting>
 */
class ProjectMeetingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "project_id" => \App\Models\Project::factory(),
            "meeting_id" => \App\Models\Meeting::factory(),
            "user_id" => \App\Models\User::factory(),
        ];
    }
}
