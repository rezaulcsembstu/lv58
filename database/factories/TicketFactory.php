<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ticket;
use App\User;
use Faker\Generator as Faker;

$factory->define(Ticket::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->jobTitle,
        'content' => $faker->text,
        'slug' => uniqid(),
        'status' => 1,
        'user_id' => function () {
            return factory(User::class)->create()->id;
        }
    ];
});
