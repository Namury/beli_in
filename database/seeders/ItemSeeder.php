<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => 'videographer1 token', 'price' => 20000, 'user_id' => 1],
            ['name' => 'videographer2 token', 'price' => 30000, 'user_id' => 2],
            ['name' => 'photographer1 token', 'price' => 40000, 'user_id' => 3],
            ['name' => 'photographer2 token', 'price' => 50000, 'user_id' => 4],
            ['name' => 'designer1 token', 'price' => 25000, 'user_id' => 5],
            ['name' => 'designer2 token', 'price' => 35000, 'user_id' => 6],
        ];

        foreach($datas as $data){
            $table = new Item;
            $table->name = $data['name'];
            $table->price = $data['price'];
            $table->user_id = $data['user_id'];
            $table->save();
        }
    }
}
