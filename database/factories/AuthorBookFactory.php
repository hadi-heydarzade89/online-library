<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AuthorBook;
use Faker\Generator as Faker;

$factory->define(AuthorBook::class, function (Faker $faker) {
    foreach (App\Models\Author::all() as $author) {
        $authorIds[] = $author->id;
    }
    foreach (App\Models\Book::all() as $book) {
        $bookIds [] = $book->id;
    }
    return [
        'author_id' => $faker->randomElement($authorIds),
        'book_id' => $faker->randomElement($bookIds),
    ];
});
