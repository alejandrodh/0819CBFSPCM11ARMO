<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $path = storage_path('app/public/product');
    return [
      'name' => $faker->sentence(3),
      'description' => $faker->paragraph(4),
      'category_id' => rand(1,6), //Crear 6 cateorias.
      'featured_img'=> $faker->image($path, 200, 200, 'food', false),
      'price' => $faker->randomFloat(2, 2, 8),
      'user_id'=> rand(1,6) //Crear 6 usuarios
    ];
});
