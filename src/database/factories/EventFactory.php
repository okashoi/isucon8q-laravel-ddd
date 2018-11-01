<?php

use Faker\Generator as Faker;

$factory->define(Torb\Infrastructure\Eloquents\Event::class, function (Faker $faker) {
    return [
        'title'     => $faker->sentence(3),
        'public_fg' => $faker->boolean,
        'closed_fg' => $faker->boolean,
        'price'     => $faker->numberBetween(1, 9) * 1000,
    ];
});

$factory->state(
    Torb\Infrastructure\Eloquents\Event::class,
    'published',
    ['public_fg' => true]
);

$factory->state(
    Torb\Infrastructure\Eloquents\Event::class,
    'unpublished',
    ['public_fg' => false]
);

$factory->state(
    Torb\Infrastructure\Eloquents\Event::class,
    'open',
    ['closed_fg' => false]
);

$factory->state(
    Torb\Infrastructure\Eloquents\Event::class,
    'closed',
    ['closed_fg' => true]
);
