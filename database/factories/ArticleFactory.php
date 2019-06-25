<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
         'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
