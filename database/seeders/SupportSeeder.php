<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Support;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['supporter' => 2, 'supported' => 1, 'item_id' => 1, 'amount' => 1, 'total_price' => 20000],
            ['supporter' => 3, 'supported' => 2, 'item_id' => 2, 'amount' => 1, 'total_price' => 30000],
            ['supporter' => 4, 'supported' => 3, 'item_id' => 3, 'amount' => 1, 'total_price' => 40000],
            ['supporter' => 5, 'supported' => 4, 'item_id' => 4, 'amount' => 1, 'total_price' => 50000],
            ['supporter' => 6, 'supported' => 5, 'item_id' => 5, 'amount' => 1, 'total_price' => 25000],
            ['supporter' => 1, 'supported' => 6, 'item_id' => 6, 'amount' => 1, 'total_price' => 35000],
        ];

        foreach($datas as $data){
            $table = new Support;
            $table->supporter = $data['supporter'];
            $table->supported = $data['supported'];
            $table->item_id = $data['item_id'];
            $table->amount = $data['amount'];
            $table->total_price = $data['total_price'];
            $table->save();
        }
    }
}
