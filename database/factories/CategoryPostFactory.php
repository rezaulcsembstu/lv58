<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Post;
use App\CategoryPost;
use Faker\Generator as Faker;

$factory->define(CategoryPost::class, function (Faker $faker) {
    return [
        //
        'category_id' => function () {
            return factory(Category::class)->create()->id;
        },
        'post_id' => function () {
            return factory(Post::class)->create()->id;
        },
    ];
});
