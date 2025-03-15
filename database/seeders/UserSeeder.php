<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run()
    {
        User::create([
            'name' => 'Hernan',
            'email' => 'Hernan@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'avatar_url' => 'https://via.placeholder.com/150'
        ]);

        

    }
}


