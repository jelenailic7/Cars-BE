<?php

use Faker\Generator as Faker;


$factory->define(App\Car::class, function (Faker $faker) {
    $faker->addProvider(new \carfaker\provider\Car($faker));

    return [
        'mark'=>$faker->brand,
        'model'=>$faker->car,
        'year'=>$faker->numberBetween(1985, 2017),
        'max_speed'=>$faker->numberBetween(160, 280),
        "is_automatic"=>$faker->boolean,
        'engine'=>$faker->randomElement(['Petrol','Electric','Hybrid','Diesel']),
        'number_of_doors'=>$faker->numberBetween(2, 5),
    ];
});
