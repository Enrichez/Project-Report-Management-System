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
            'name' => 'Proyek PT Lupak Dalam Estate',
            'company_id' => 1,
            'description' => 'Proyek PT Lupak Dalam Estate',
            'start_date' => '2024-01-15',
            'end_date' => '2024-04-15',
        ]);
    }
}
