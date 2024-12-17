<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i < 50; $i++) {
            Dosen::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'phone_num' => $faker->phoneNumber(),
                'DOB' => $faker->date($format = 'd-m-Y', $max = '1997-01-01'),
                'course' => $faker->randomElement(['Compilation Techniques', 'Data Mining', 'Entrepreneurship: Market Validation', 'Geographical Information System', 'Operating System', 'Web Programming'], ['Compilation Techniques', 'Data Mining', 'Entrepreneurship: Market Validation', 'Geographical Information System', 'Operating System', 'Web Programming'])
            ]);
        }
    }
}
