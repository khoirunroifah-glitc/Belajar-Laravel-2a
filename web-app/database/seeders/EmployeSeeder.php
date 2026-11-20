<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        
        for ($i = 1; $i <= 10; $i++) {
            DB::table('employes')->insert([
                'id' => $i,
                'nama' => $faker->name,
                'alamat' => $faker->cityName,
                'gender' => $faker->randomElement(['L', 'P']),
                'gaji' => $faker->randomElement([1500000, 2500000, 3500000, 4500000]),
            ]);
        }
    }
}
