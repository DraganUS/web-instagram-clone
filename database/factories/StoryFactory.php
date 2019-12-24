<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Story;
use Faker\Generator as Faker;

$factory->define(Story::class, function (Faker $faker) {
    return [
        'img_url' => $faker->imageUrl(230, 300, 'people', true, false),
        'user_id' =>$faker->numberBetween(1, 300),
    ];
});


