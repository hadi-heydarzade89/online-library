<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Book;
use Faker\Generator as Faker;
use App\Models\Category;


$factory->define(Book::class, function (Faker $faker) {
    $categoryIds = [];
    foreach (Category::all() as $category) {
        $categoryIds[] = $category->id;
    }
    return [
        'category_id' => $faker->randomElement($categoryIds),
        'name' => $faker->title,
        'short_description' => $faker->text(155),
        'description' => $faker->realText(2000),
        'status' => $faker->randomElement(['enable', 'disable', 'pending']),
    ];
});
