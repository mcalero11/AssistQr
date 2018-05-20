<?php

use Faker\Generator as Faker;


$factory->define(App\Timetable::class, function (Faker $faker) {
    $times = $faker->time();
    return [
        'course_id' => rand(3,25),
        'dayOfWeek' => rand(1,7),
        'startTime' => $times,
        'endingTime' => $faker->time('H:i:s',$times),
    ];
});
