<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Report::create([
            'project_id' => 1,
            'name' => 'Laporan Awal Proyek',
            'content' => 'This is the initial report for the project.',
            'start_time' => '2024-01-15 09:00:00',
            'end_time' => '2024-01-15 17:00:00',
        ]);
        Report::create([
            'project_id' => 1,
            'name' => 'Laporan Minggu Kedua Proyek',
            'content' => 'Ini adalah laporan untuk minggu kedua proyek.',
            'start_time' => '2024-02-10 10:00:00',
            'end_time' => '2024-02-10 18:00:00',
        ]);
        Report::create([
            'project_id' => 1,
            'name' => 'Laporan Minggu Ketiga Proyek',
            'content' => 'Ini adalah laporan untuk minggu ketiga proyek.',
            'start_time' => '2024-03-05 11:00:00',
            'end_time' => '2024-03-05 19:00:00',
        ]);
    }
}
