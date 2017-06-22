<?php

use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        factory(User::class, 10)->create()->each(function ($u) {
            $size = rand(2, 5);
            $posts = [];
            for ($i = 0; $i < $size; $i++) {
                $posts[] = factory(Post::class)->make();
            }
            $u->posts()->saveMany($posts);
        });
    }
}
