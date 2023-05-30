<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
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
            Post::create([
                "title" => $faker->sentence(),
                "description" => $faker->sentence(),
                "author" => $faker->name(),
                "date" => $faker->date(),
                "readingTime" => $faker->randomDigitNotNull(),
                "image" => $faker->paragraph(),
                "body" => $faker->imageUrl(640, 480, 'animals', true)
            ]);
        }
    }
}
