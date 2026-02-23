<?php

namespace Database\Seeders;

use App\Models\TaskDocument;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaskDocument::factory()->count(10)->create();
    }
}
