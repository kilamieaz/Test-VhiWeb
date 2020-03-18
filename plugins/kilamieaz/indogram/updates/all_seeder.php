<?php

namespace Kilamieaz\Indogram\Updates;

use Faker\Factory;
use Kilamieaz\Indogram\Models\Post;
use Kilamieaz\Indogram\Models\Tag;
use RainLab\User\Models\User;
use October\Rain\Database\Updates\Seeder;

class AllSeeder extends Seeder
{
    public function run()
    {
        // $password = bcrypt('password');
        // $user = new User();
        // $user->email = 'im.admin@gmail.com';
        // $user->username = 'Sultan';
        // $user->password = $password;
        // $user->password_confirmation = $password;
        // $user->save();

        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $name = $faker->sentence(1, true);
            $description = $faker->sentence(3, true);
            $tag = Tag::create([
                'name' => $name,
                'slug' => str_slug($name, '-'),
            ]);
            $post = Post::create([
                'description' => $description,
                'slug' => str_slug($description, '-'),
                'user_id' => 1
            ]);
            $post->tags()->attach($tag);
        }
    }
}
