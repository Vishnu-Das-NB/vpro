<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaskDocument>
 */
class TaskDocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "task_id" => \App\Models\Task::factory(),
            "document_id" => \App\Models\Document::factory(),
            "user_id" => \App\Models\User::factory(),
        ];
    }
}
