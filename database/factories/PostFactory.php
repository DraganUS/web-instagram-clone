<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'img_url' => $faker->imageUrl(230, 300, 'people', true, false),
        'user_id' =>$faker->numberBetween(1, 100),
        'place' => $faker->city
    ];
});
