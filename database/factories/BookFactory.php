<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
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

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'book_name' => $faker->name,
        'description' => $faker->sentence,
        'author_name' => $faker->name,
        'publishing_name' => $faker->name,
        'book_image' => 'default_image.png',
        'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'category' => $faker->firstName,
    ];
});
