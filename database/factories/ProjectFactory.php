<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    $countries = \App\Country::all();

    return [
        'country_id' => $countries->random()->id,
        'short_desc' => $faker->text(255),
        'long_desc' => $faker->text(),
        'active' => rand(0,1),
        'featured' => rand(0,1),
        'active_at' => $faker->date(),
    ];
});
