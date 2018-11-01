<?php

use Faker\Generator as Faker;

$factory->define(Torb\Infrastructure\Eloquents\Administrator::class, function (Faker $faker) {
    return [
        'nickname'   => $faker->name,
        'login_name' => $faker->unique()->userName,
        'pass_hash'  => '2bb80d537b1da3e38bd30361aa855686bde0eacd7162fef6a25fe97bf527a25b', // secret
    ];
});
