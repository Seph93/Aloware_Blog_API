<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // clear data
        BlogPost::truncate();

        $faker = \Faker\Factory::create();

        // seed one blog
        BlogPost::create([
            'title' => $faker->sentence,
            'content' => $faker->paragraph,
        ]);
    }
}
