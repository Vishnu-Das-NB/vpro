<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrganizationUsers>
 */
class OrganizationUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "organization_id" => \App\Models\Organization::factory(),
            "user_id" => \App\Models\User::factory(),
            "created_by" => \App\Models\User::factory(),
        ];
    }
}
