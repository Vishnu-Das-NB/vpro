<?php

namespace Database\Seeders;

use App\Models\OrganizationUsers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrganizationUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrganizationUsers::factory()->count(10)->create();
    }
}
