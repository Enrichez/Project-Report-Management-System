<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Website Redesign',
            'company_id' => 1,
            'description' => 'Redesign the corporate website for better user experience.',
            'start_date' => '2024-01-15',
            'end_date' => '2024-04-15',
        ]);
        Project::create([
            'name' => 'Mobile App Development',
            'company_id' => 2,
            'description' => 'Develop a mobile application for our e-commerce platform.',
            'start_date' => '2024-02-01',
            'end_date' => '2024-06-01',
        ]);
        Project::create([
            'name' => 'Cloud Migration',
            'company_id' => 3,
            'description' => 'Migrate all on-premise servers to cloud infrastructure.',
            'start_date' => '2024-03-01',
            'end_date' => '2024-09-01',
        ]);
    }
}
