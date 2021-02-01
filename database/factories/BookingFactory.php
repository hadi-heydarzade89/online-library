<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Booking;
use Faker\Generator as Faker;

$factory->define(Booking::class, function (Faker $faker) {
    foreach (App\Models\Book::all() as $book) {
        $bookIds[] = $book->id;
    }
    foreach (App\Models\User::all() as $user) {
        $userIds[] = $user->id;
    }
    return [
        'book_id' => $faker->randomElement($bookIds),
        'user_id' => $faker->randomElement($userIds),
        'from' => $faker->dateTime,
        'to' => $faker->dateTime,
    ];
});
