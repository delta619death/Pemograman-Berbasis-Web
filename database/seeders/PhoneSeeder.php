<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('idhp_ID');
        for($i=0;$i<100;$i++)
        {
            DB::table('phone')->insert([
                'namahp' => $faker->sentence(2),
                'merek' => $faker->word(),
                'harga' => $faker->numberBetween(1000000,25000000),
                'processor' => $faker->sentence(1),
                'gambar' => $faker->image(null, 250, 250)
            ]);
        }
    }
}
