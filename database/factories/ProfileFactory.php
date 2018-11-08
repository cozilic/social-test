<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'avatar' => '/images/default_avatar.png', // 'http://lorempixel.com/640/480/'
        'bio' => $faker->realtext('100','1'),
        'twitter_username' => $faker->randomElement($array = array ('',$faker->username)),
        'facebook_username' => $faker->randomElement($array = array ('',$faker->username)),
        'google_username' => $faker->randomElement($array = array ('',$faker->randomNumber())),
    ];
});
