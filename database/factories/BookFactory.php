<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Book::class, function (Faker $faker) {
    return [
        'book_name' => $faker->name,
        'description' => $faker->sentence,
        'author_name' => $faker->name,
        'publishing_name' => $faker->name,
        'book_image' => 'default_img.png',
        'book_genre' => $faker->firstName,
        'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'category' => $faker->firstName,
    ];
});
