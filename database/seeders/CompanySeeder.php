<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'Tech Innovators Inc.',
            'description' => 'A leading company in tech innovations.',
        ]);
        Company::create([
            'name' => 'Green Solutions Ltd.',
            'description' => 'Pioneers in sustainable and eco-friendly solutions.',
        ]);
        Company::create([
            'name' => 'HealthCare Plus',
            'description' => 'Committed to providing quality healthcare services.',
        ]);
    }
}
