<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 13; $i++) {
            $newTag = new Tag();
            $newTag->name =  "#" . $faker->word();
            $newTag->save();
        }
    }
}
