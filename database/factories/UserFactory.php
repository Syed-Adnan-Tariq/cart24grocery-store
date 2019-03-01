<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'Address'=>$faker->address,
        'Telephone'=>$faker->numberBetween($min=000000000,$max=999999999),

    ];
});


$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'url'=> $faker->imageUrl(),
    ];
});


$factory->define(App\Order::class, function (Faker $faker) {
    return [
        'Quantity' => $faker->numberBetween($min=5,$max=1000),
        'price'=> $faker->numberBetween($min=5,$max=1000),
        'date'=> $faker->date(),
        'time'=> $faker->time(),
        'user_id'=> $faker->numberBetween($min=1,$max=100),

    ];
});


$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
       // 'description'=> $faker->description,
        'url'=> $faker->imageUrl(),
        'price'=> $faker->numberBetween($min=2,$max=10000),
        'discount'=> $faker->numberBetween($min=1,$max=100),
        'category_id'=> $faker->numberBetween($min=1,$max=10),

    ];
});


$factory->define(App\OrderProduct::class, function (Faker $faker) {
    return [
        'product_id'=> $faker->numberBetween($min=1,$max=500),
        'order_id'=> $faker->numberBetween($min=1,$max=100),


    ];
});


$factory->define(App\Recipe::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'url'=>$faker->imageUrl(),
       // 'process'=>$faker->process,
        'Price'=>$faker->numberBetween($min=10,$max=10000),
        'quantity'=>$faker->numberBetween($min=1,$max=10000),
        'discount'=>$faker->numberBetween($min=0,$max=100),

    ];
});

$factory->define(App\ProductRecipe::class, function (Faker $faker) {
    return [
        'product_id'=> $faker->numberBetween($min=1,$max=500),
        'recipe_id'=> $faker->numberBetween($min=1,$max=50),


    ];
});


$factory->define(App\OrderRecipe::class, function (Faker $faker) {
    return [
        'order_id'=> $faker->numberBetween($min=1,$max=100),
        'recipe_id'=> $faker->numberBetween($min=1,$max=50),


    ];
});
