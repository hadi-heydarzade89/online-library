<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Category;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


$factory->define(Category::class, function (Faker $faker) {
    return [
        [
            'name' => Str::random(10),
            'status' => 'enable',
        ],
        [
            'name' => Str::random(10),
            'status' => 'disable',
        ]
    ];
});
