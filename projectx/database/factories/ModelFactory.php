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

/** @var \Illuminate\Database\Eloquent\Factory $factory */

// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;

//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });
$factory->define(App\Store::class, function (Faker\Generator $faker) {
    $city = City::find(rand(1,48314));
    $name = $faker->company;
    $data =  [
        'name'              => $name,
        'slug'              => str_slug($name),
        'description'       => $faker->sentence(10),
        'street_address'    => $faker->streetName,
        'house_number'      => ucfirst($faker->randomLetter) . ' '. $faker->buildingNumber,
        'zipcode'           => $faker->postcode,
        'website'           => $faker->domainName,
        'city_id'           => $city->id,
        'state_id'          => $city->state->id,
        'country_id'        => $city->state->country->id,
    ];
    return $data;
});
factory(App\Models\Store::class, 50000)->create();