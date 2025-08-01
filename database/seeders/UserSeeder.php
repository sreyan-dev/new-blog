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
        User::insert([
            ['name'=>'user',
             'email'=>'user@gmail.com',
             'password'=>'12345678',
             'user_role'=>'user'
            ],
            ['name'=>'editor',
             'email'=>'editor@gmail.com',
             'password'=>'12345678',
             'user_role'=>'editor'
            ],
            ['name'=>'admin',
             'email'=>'admin@gmail.com',
             'password'=>'12345678',
             'user_role'=>'admin'
            ]
        ]);
    }
}
