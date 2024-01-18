<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $items = ['spada', 'fucile a pompa', 'armatura leggera', 'arco', 'scudo', 'pistola', 'coltello', 'molotov', 'AK47', 'lancia'];

        foreach($items as $item) {
            $new_item = new Item();
            
            $new_item->name = $item;
            $new_item->description = $faker->paragraphs(1, true);
            $new_item->price = $faker->randomFloat(2, 0 , 99999999);
            
            $new_item->save();
        };
    }
}
