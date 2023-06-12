<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([[
            'name'=>'teacher',
            'email'=>'teacher@gmail.com',
            'password'=>'12345678'
        ],[
            'name'=>'student',
            'email'=>'student@gmail.com',
            'password'=>'12345678'
        ]
    ]);
    }
}
