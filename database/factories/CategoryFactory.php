<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    $faker->addProvider(new \CategoryNameGenerator\Provider\en_US\Category($faker));

    return [
        //
        'name' => $faker->categoryName()
    ];
});
