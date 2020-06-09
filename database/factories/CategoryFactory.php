<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $name = mb_strtolower($faker->unique()->lastName);
    return [
        'name' => ucfirst($name),
        'store_id' => 1,
        'parse_url' => 'example.com/' . Str::slug($name, '-'),
        'friendly_url_name' => Str::slug($name, '-'),
    ];
});
