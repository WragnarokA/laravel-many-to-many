<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 4; $i++) {
            $post = new Type();
            $post->name = $faker->sentence(2);

            $post->save();
        }
    }
}
