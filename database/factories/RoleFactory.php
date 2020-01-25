<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Spatie\Permission\Models\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    $faker->addProvider(new \CategoryNameGenerator\Provider\en_US\Category($faker));

    return [
        //
        'name' => $faker->profession(),
        'guard_name' => 'web'
    ];
});
