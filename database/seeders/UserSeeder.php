<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user =[

            [
                'id' => 1,
                'name' => 'Penjaga Lapangan',
                'email' => 'admin@gmail.com',
                'phone' => '081234567890',
                'password' => bcrypt('password'),
                'role' => 'admin'
            ],
    ];
    
    User::insert($user);

    }
}
