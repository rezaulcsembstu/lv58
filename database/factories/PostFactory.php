<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        //
        'title' => $title,
        'content' => $faker->text,
        'slug' => Str::slug($title, '-'),
        'status' => 1,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
