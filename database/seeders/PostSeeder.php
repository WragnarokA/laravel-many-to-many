<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Schema;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Schema::disableForeignKeyConstraints();
        Post::truncate();
        Schema::enableForeignKeyConstraints();

        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->content = $faker->text(500);
            $post->image = "placeholders/placeholder.jpg";
            $post->save();
        }
    }
}
