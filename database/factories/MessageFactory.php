<?php

use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    return [
        'from' => $faker->numberBetween($min=1,$max=6),
        'to'   => $faker->numberBetween($min=1,$max=6),
        'text' => $faker->sentence,

    ];
});
