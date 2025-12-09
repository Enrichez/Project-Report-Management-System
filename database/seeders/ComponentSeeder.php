<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Component::create(['name' => 'Pekerjaan']);
        Component::create(['name' => 'Peralatan']);
        Component::create(['name' => 'Bahan']);
        Component::create(['name' => 'Tenaga Kerja']);
        Component::create(['name' => 'Upah Tenaga Kerja']);
        Component::create(['name' => 'Kondisi Kerja']);
    }
}
