<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
                'name'               => 'leo',
                'email'              => 'leo123@gmail.com',
                'password'           => Hash::make('Admin@12345'),
                'remember_token'     => NULL,
                'created_at'         => date('Y-m-d h:i:s'),
                'updated_at'         => date('Y-m-d h:i:s'),
            ],
            [
                'name'               => 'Fathur',
                'email'              => 'Fathur123@gmail.com',
                'password'           => Hash::make('Admin@12345'),
                'remember_token'     => NULL,
                'created_at'         => date('Y-m-d h:i:s'),
                'updated_at'         => date('Y-m-d h:i:s'),
            ],
        ];

        User::insert($users);
    }
}
