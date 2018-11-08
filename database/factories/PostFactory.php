<?php

use Faker\Generator as Faker;
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => App\User::all()->random()->id,
        'body' => $faker->realtext('500','2'),
        'visibility' => $faker->randomElement($array = array ('public','friends','private')) // 'b'
    ];
});
