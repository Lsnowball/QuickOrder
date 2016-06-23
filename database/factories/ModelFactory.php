<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use DB;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

// $factory->define(App\OrderDetail::class, function () {
//     return [
//         'id' => rand(1, 11),
//         'menu_id' => rand(1, 8),
//         'quantity' => rand(1, 3),
//     ];
// });

// $factory->define(App\Order::class, function () {
//     return [
//         'user_id' => rand(1, 11),
//         'total_price' => DB:table('OrderDetail')
//         						->where()
//         						->sum(,
        
//     ];
// });