<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'iOS Development',
                'is_top' => true,
            ],
            [
                'name' => 'Laravel',
                'is_top' => true,
            ],
            [
                'name' => 'DBMS',
                'is_top' => false,
            ],
            [
                'name' => 'Collaborative Problem Solving',
                'is_top' => true,
            ],
            [
                'name' => 'Business',
                'is_top' => true,
            ],
            [
                'name' => 'Android Development',
                'is_top' => false,
            ],
            [
                'name' => 'Figma',
                'is_top' => false,
            ],
            [
                'name' => 'Project Management',
                'is_top' => false,
            ],
            [
                'name' => 'Git',
                'is_top' => true,
            ],
            [
                'name' => 'Java',
                'is_top' => false,
            ],
            [
                'name' => 'SwiftUI',
                'is_top' => false,
            ],
            [
                'name' => 'Firebase',
                'is_top' => false,
            ],
            [
                'name' => 'MySQL',
                'is_top' => false,
            ],
            [
                'name' => 'Python',
                'is_top' => false,
            ],
            [
                'name' => 'C++',
                'is_top' => false,
            ],
            [
                'name' => 'JavaScript',
                'is_top' => false,
            ],
            [
                'name' => 'Livewire',
                'is_top' => false,
            ],
            [
                'name' => 'Filament',
                'is_top' => false,
            ],
            [
                'name' => 'Selenium',
                'is_top' => false,
            ],
            [
                'name' => 'Object-Oriented Programming',
                'is_top' => true,
            ],
            [
                'name' => 'MVC',
                'is_top' => false,
            ],
            [
                'name' => 'Leadership',
                'is_top' => false,
            ],
            [
                'name' => 'Back-End Development',
                'is_top' => true,
            ],
            [
                'name' => 'Cloud Computing/DevOps',
                'is_top' => false,
            ],

        ];

        foreach ($skills as $skill) {
            Skill::create($skill);
        }
    }
}
