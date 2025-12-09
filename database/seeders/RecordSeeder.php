<?php

namespace Database\Seeders;

use App\Models\ReportComponent;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ReportComponent::create([
            'report_id' => 1,
            'component_id' => 1,
            'name' => 'Pekerjaan',
        ]);
        ReportComponent::create([
            'report_id' => 1,
            'component_id' => 2,
            'name' => 'Peralatan',
        ]);
        ReportComponent::create([
            'report_id' => 1,
            'component_id' => 3,
            'name' => 'Bahan',
        ]);
        ReportComponent::create([
            'report_id' => 1,
            'component_id' => 4,
            'name' => 'Tenaga Kerja',
        ]);
        ReportComponent::create([
            'report_id' => 1,
            'component_id' => 5,
            'name' => 'Upah Tenaga Kerja',
        ]);
        ReportComponent::create([
            'report_id' => 1,
            'component_id' => 6,
            'name' => 'Kondisi Kerja',
        ]);
        ReportComponent::create([
            'report_id' => 2,
            'component_id' => 1,
            'name' => 'Pekerjaan',
        ]);
        ReportComponent::create([
            'report_id' => 2,
            'component_id' => 2,
            'name' => 'Peralatan',
        ]);
        ReportComponent::create([
            'report_id' => 2,
            'component_id' => 3,
            'name' => 'Bahan',
        ]);
        ReportComponent::create([
            'report_id' => 1,
            'component_id' => 4,
            'name' => 'Tenaga Kerja',
        ]);
        ReportComponent::create([
            'report_id' => 2,
            'component_id' => 5,
            'name' => 'Upah Tenaga Kerja',
        ]);
        ReportComponent::create([
            'report_id' => 2,
            'component_id' => 6,
            'name' => 'Kondisi Kerja',
        ]);
    }
}
