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
            'name' => 'PT Lupak Dalam Estate',
            'description' => 'Perusahaan PT Lupak Dalam Estate bergerak di bidang perkebunan kelapa sawit dan berkomitmen terhadap praktik pertanian berkelanjutan.',
        ]);
    }
}
