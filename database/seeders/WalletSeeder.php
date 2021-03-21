<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Wallet;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['user_id' => 1, 'amount' => 20000],
            ['user_id' => 2, 'amount' => 30000],
            ['user_id' => 3, 'amount' => 40000],
            ['user_id' => 4, 'amount' => 50000],
            ['user_id' => 5, 'amount' => 25000],
            ['user_id' => 6, 'amount' => 35000],
        ];

        foreach($datas as $data){
            $table = new Wallet;
            $table->user_id = $data['user_id'];
            $table->amount = $data['amount'];
            $table->save();
        }
    }
}
