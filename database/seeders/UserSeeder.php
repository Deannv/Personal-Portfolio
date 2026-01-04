<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'kemas@eivern.com',
            'password' => bcrypt('kemz30112003'),
            'name' => 'Kemz',
            'is_admin' => true
        ]);
    }
}
