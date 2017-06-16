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
        \App\User::truncate();
        \App\Post::truncate();

        factory(App\User::class, 10)->create()->each(function ($user){
            $post = factory(App\Post::class)->make();
            $user->posts()->save($post);
        });
    }
}
