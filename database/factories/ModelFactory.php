<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->realText(rand(10,50)),
        'body' => $faker->realText(rand(10,300)),
        'user_id' => rand(1,10)
    ];
});

$factory->define(App\PostStatu::class, function (Faker\Generator $faker) {

    return [
        'post_id' => rand(),
        'title' => $faker->text(200),
        'body' => $faker->paragraph(rand(1,3)),
        'user_id' => rand(1,100)
    ];
});
