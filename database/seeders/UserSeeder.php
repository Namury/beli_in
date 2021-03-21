<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            ['user_type_id' => 1,
            'user_role_id' => 1, 
            'name' => 'Videographer1', 
            // 'username' => 'videographer1', 
            'password' => bcrypt('videographer1'), 
            'email' => 'videographer1@mail.com',
            'description' => 'The First Videographer',
            'page_name' => 'Videographer 1',
            'page_slug' => 'videographer1',
            ],
            ['user_type_id' => 1,
            'user_role_id' => 1, 
            'name' => 'Videographer2', 
            // 'username' => 'videographer2', 
            'password' => bcrypt('videographer2'), 
            'email' => 'videographer2@mail.com',
            'description' => 'The Second Videographer',
            'page_name' => 'Videographer 2',
            'page_slug' => 'videographer2',
            ],
            ['user_type_id' => 2,
            'user_role_id' => 1, 
            'name' => 'Photographer1', 
            // 'username' => 'photographer1', 
            'password' => bcrypt('photographer1'), 
            'email' => 'photographer1@mail.com',
            'description' => 'The First Photographer',
            'page_name' => 'Photographer 1',
            'page_slug' => 'photographer1',
            ],
            ['user_type_id' => 2,
            'user_role_id' => 1, 
            'name' => 'photographer2', 
            // 'username' => 'photographer2', 
            'password' => bcrypt('photographer2'), 
            'email' => 'photographer2@mail.com',
            'description' => 'The Second Photographer',
            'page_name' => 'Photographer 2',
            'page_slug' => 'photographer2',
            ],
            ['user_type_id' => 3,
            'user_role_id' => 1, 
            'name' => 'designer1', 
            // 'username' => 'designer1', 
            'password' => bcrypt('designer1'), 
            'email' => 'designer1@mail.com',
            'description' => 'The First Designer',
            'page_name' => 'Designer 1',
            'page_slug' => 'designer1',
            ],
            ['user_type_id' => 3,
            'user_role_id' => 1, 
            'name' => 'Designer2', 
            // 'username' => 'designer2', 
            'password' => bcrypt('designer2'), 
            'email' => 'designer2@mail.com',
            'description' => 'The Second Designer',
            'page_name' => 'Designer 2',
            'page_slug' => 'designer2',
            ],
        ];

        foreach($datas as $data){
            $table = new User;
            $table->name = $data['name'];
            // $table->username = $data['username'];
            $table->password = $data['password'];
            $table->email = $data['email'];
            $table->description = $data['description'];
            $table->page_name = $data['page_name'];
            $table->page_slug = $data['page_slug'];
            $table->user_role_id = $data['user_role_id'];
            $table->user_type_id = $data['user_type_id'];
            $table->save();
        }
    }
}
