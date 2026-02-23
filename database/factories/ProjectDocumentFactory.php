<?php

namespace Database\Factories;

use App\Models\Document;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectDocument>
 */
class ProjectDocumentFactory extends Factory
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
            "document_id" => \App\Models\Document::factory(),
            "user_id" => \App\Models\User::factory(),
        ];
    }
}
