<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => 'Creator'],
            ['name' => 'Donor'],
        ];

        foreach($datas as $data){
            $table = new UserRole;
            $table->name = $data['name'];
            $table->save();
        }
    }
}
