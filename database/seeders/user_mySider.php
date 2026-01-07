<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\user_my;

class user_mySider extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user_my::count() < 3
            ? collect([
                user_my::create([
                    'name' => 'Алла',
                    'email' => 'test@test.com',
                    'city' => 'Moscow',
                    'role' => 'guest',
                    'last_login' => now()
                ]),
                user_my::create([
                    'name' => 'Тимур',
                    'email' => 'test2@test.com',
                    'city' => 'Moscow',
                    'role' => 'guest',
                    'last_login' => now()
                ]),
                user_my::create([
                    'name' => 'ДАллас лок',
                    'email' => 'test@test.com',
                    'city' => 'Moscow',
                    'role' => 'фффф',
                    'last_login' => now()
                ]),

            ])
            : user_my::take(3);
        
    }
}
