<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Post;
use App\Comment;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->text,
        'user_id' => $faker->numberBetween($min = 1, $max= 51),
        'post_id' => $faker->numberBetween($min = 1, $max= 51),
        'created_at' => $faker->date(),
        'updated_at' => $faker->date(),
    ];
});
