<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RefLevel;
use Faker\Generator as Faker;

$factory->define(RefLevel::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'reward' => $faker->word,
        'congratulatory_message' => $faker->word,
        'target_no_refferals' => $faker->word,
        'point_per_referral' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
