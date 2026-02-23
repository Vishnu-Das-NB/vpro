<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->count(10)->create();
        $this->call([
            OrganizationSeeder::class,
            TeamsSeeder::class,
            RoleSeeder::class,
            UserRoleSeeder::class,
            ProjectSeeder::class,
            TaskSeeder::class,
            TeamMemberSeeder::class,
            MeetingSeeder::class,
            DocumentSeeder::class,
            ProjectTeamSeeder::class,
            ProjectUserSeeder::class,
            ProjectTaskSeeder::class,
            ProjectDocumentSeeder::class,
            ProjectMeetingSeeder::class,
            TaskMeetingSeeder::class,
            TaskDocumentSeeder::class,
            TaskLogsSeeder::class,
        ]);
    }
}
