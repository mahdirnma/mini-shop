<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class VisitorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Visitor::create([
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'password' => Hash::make('123'),
            'age' => 25,
            'gender' => 'male',
        ]);
        Visitor::create([
            'name' => 'reza',
            'email' => 'reza@gmail.com',
            'password' => Hash::make('123'),
            'age' => 30,
            'gender' => 'male',
        ]);
        Visitor::create([
            'name' => 'sara',
            'email' => 'sara@gmail.com',
            'password' => Hash::make('123'),
            'age' => 27,
            'gender' => 'female',
        ]);
    }
}
