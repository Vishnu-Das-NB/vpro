<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->sentence(),
            "description" => $this->faker->paragraph(),
            "start"=> $this->faker->dateTimeBetween("+1 month","+2 months"),
            "end"=> $this->faker->dateTimeBetween("+2 months","+3 months"),
            "priority"=> $this->faker->numberBetween(1,5),
        ];
    }
}
