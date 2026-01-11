<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Content::create([
            'email' => 'kemas@eivern.com',
            'linkedin_url' => 'https://www.linkedin.com/in/kemasdnv/',
            'github_url' => 'https://github.com/Deannv',
            'is_available' => true,
            'role' => 'Software Engineer',
            'Passion' => 'Building creative solutions',
        ]);
    }
}
