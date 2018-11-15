<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([

            'name'      =>  'Ahmed Khater',
            'email'     =>  'a_khater55@yahoo.com',
            'password'  =>  bcrypt('123456'),
            'admin'     =>  1
        ]);
    

        App\Profile::create([

            'user_id'   =>  $user->id,
            'avatar'    =>  'uploads/avatars/1.png',
            'about'     =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur cum laboriosam obcaecati illo veniam ullam ipsam eveniet non corporis, facilis itaque cupiditate tempora recusandae nisi, facere dicta exercitationem nemo sit?',
            'facebook'  =>  'facebook.com',
            'youtube'   =>  'youtube.com'
        ]);

    }
}
