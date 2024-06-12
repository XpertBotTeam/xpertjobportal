<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\IndustryType;
use App\Models\JobCategory;
use App\Models\TeamSize;
>>>>>>> 856ad1c (uptd)
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(JobCategorySeeder::class);
        $this->call(JobRoleSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(ExperienceSeeder::class);
        $this->call(IndustryTypeSeeder::class);
        $this->call(OrganizationTypeSeeder::class);
        $this->call(TeamSizeSeeder::class);
        $this->call(JobSalaryTypeSeeder::class);
        $this->call(JobEducationSeeder::class);
        $this->call(JobTypeSeeder::class);
        $this->call(JobTagSeeder::class);
>>>>>>> 856ad1c (uptd)
    }
}
