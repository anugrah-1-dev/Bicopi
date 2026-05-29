<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::updateOrCreate(
            ['email' => 'admin@bicopi.com'],
            [
                'name'     => 'Admin Bicopi',
                'password' => Hash::make('Bicopi26.'),
            ]
        );
    }
}
