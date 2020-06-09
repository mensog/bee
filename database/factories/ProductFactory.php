<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

$factory->define(Product::class, function (Faker $faker) {
    $name = mb_strtolower($faker->unique()->firstName);
    return [
        'name' => ucfirst($name),
        'sku' => $faker->unique()->numberBetween(10000, 10000000),
        'store_id' => 1,
        'parse_url' => 'example.com/' . Str::slug($name, '-'),
        'friendly_url_name' => Str::slug($name, '-'),
        'price' => $faker->numberBetween(10000, 1000000),
        'img_url' => 'https://picsum.photos/200/200?' . $faker->unique()->numberBetween(),
        'description' => $faker->text(rand(150, 350)),
        'weight' => $faker->numberBetween(50, 50000),
        'category_id' => function () {
            return (Arr::random(Category::all()->toArray()))['id'];
        },
    ];
});
