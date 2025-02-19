<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@youcode.ma',
                'password' => Hash::make('password123'),
                'role' => 'admin'
            ],
            [
                'name' => 'Student One',
                'email' => 'student1@youcode.ma',
                'password' => Hash::make('password123'),
                'role' => 'student'
            ],
            [
                'name' => 'Student Two',
                'email' => 'student2@youcode.ma',
                'password' => Hash::make('password123'),
                'role' => 'student'
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}