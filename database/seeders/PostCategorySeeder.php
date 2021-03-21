<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\PostCategory;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['name' => 'Vlog', 'description' => 'My Vlog', 'user_id' => 1],
            ['name' => 'Tutorial', 'description' => 'Videography Tutorial', 'user_id' => 2],
            ['name' => 'Tips', 'description' => 'Photography Tips', 'user_id' => 3],
            ['name' => 'Trick', 'description' => 'Photography Trick', 'user_id' => 4],
            ['name' => 'Result', 'description' => 'My Design Result', 'user_id' => 5],
            ['name' => 'Vlog', 'description' => 'My Vlog', 'user_id' => 6],
        ];

        foreach($datas as $data){
            $table = new PostCategory;
            $table->name = $data['name'];
            $table->description = $data['description'];
            $table->user_id = $data['user_id'];
            $table->save();
        }
    }
}
