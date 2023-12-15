<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void 
    {
        for($i = 0; $i < 15; $i++){
            $new_character = new Character();
            $new_character->name = $faker->unique()->name();
            $new_character->bio = $faker->paragraphs(2, true);
            $new_character->defense = $faker->numberBetween(1,100);
            $new_character->speed = $faker->numberBetween(1,100);
            $new_character->hp = $faker->numberBetween(100,1000);
            $new_character->save();
        }
    }
}
