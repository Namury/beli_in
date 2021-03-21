<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => 'Videography'],
            ['name' => 'Photography'],
            ['name' => 'Graphic Design'],
        ];

        foreach($datas as $data){
            $table = new UserType;
            $table->name = $data['name'];
            $table->save();
        }
    }
}
