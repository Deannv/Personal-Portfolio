<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $education = [
            [
                'name' => 'SMK TI Bali Global Denpasar',
                'major' => 'Computer Science',
                'start_date' => '2019-06-11',
                'end_date' => '2022-06-11',
            ],
            [
                'name' => 'Institut Teknologi dan Bisnis STIKOM Bali',
                'major' => 'Bachelor of Technology Information',
                'start_date' => '2022-08-11',
            ],
        ];

        foreach ($education as $edu) {
            Education::create($edu);
        }
    }
}
