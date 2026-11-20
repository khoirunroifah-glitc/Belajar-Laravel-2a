<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'nama' => 'Khoirun Roifah',
            'email' => 'khoirunroifah@mail.com',
            'password' => Hash::make('123456'),
            'foto' => '',
            'role' => 'admin',
        ]);
    }
}
