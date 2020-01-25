<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Ticket;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    $randomNumber = rand(0, 99);

    if ($randomNumber % 2 == 0) {
        return [
            //
            'content' => $faker->text,
            'post_id' => function () {
                return factory(Post::class)->create()->id;
            },
            'user_id' => function () {
                return factory(User::class)->create()->id;
            },
            'post_type' => 'App\Post',
            'status' => 1,
        ];
    } else {
        return [
            //
            'content' => $faker->text,
            'post_id' => function () {
                return factory(Ticket::class)->create()->id;
            },
            'user_id' => function () {
                return factory(User::class)->create()->id;
            },
            'post_type' => 'App\Ticket',
            'status' => 1,
        ];
    }
});
