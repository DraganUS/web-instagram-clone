<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Follow;
use Faker\Generator as Faker;

$factory->define(Follow::class, function (Faker $faker) {
    return [
        'user_id' =>$faker->numberBetween(1, 100),
        'following_id' =>$faker->numberBetween(1, 100)
    ];
});
