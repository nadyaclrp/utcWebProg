<?php

namespace Database\Seeders;

use App\Models\Highlight;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HighlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 11 ; $i++) {
            Highlight::create([
                "post_id"=>mt_rand(1,9),
                "likes" => $faker->randomDigitNotNull()
            ]);
        }
    }
}
