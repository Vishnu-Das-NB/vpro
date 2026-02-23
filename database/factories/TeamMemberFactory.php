<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "team_id" => \App\Models\Teams::factory(),
            "user_id" => \App\Models\User::factory(),
            "created_by" => \App\Models\User::factory(),
        ];
    }
}
