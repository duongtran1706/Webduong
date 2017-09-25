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
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'DisplayName'=>$faker->name,
        'email' => $faker->unique()->safeEmail,
        'Lastlogin'=>$faker->date('Y-m-d'),
        'Birthday'=>$faker->date('Y-m-d'),
        'Avatar'=>$faker->imageUrl($width = 640, $height = 480),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(),

    ];
});
/*$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name'=>$faker->name,
        'Discription'=>$faker->text,

    ];
});*/


$factory->define(App\Topic::class, function (Faker\Generator $faker) {
    return [
    'name'=>$temp=$faker->name,
    'Description'=>$faker->text(400),
    'namedescript'=>str_slug($temp,'-'),
   'Display'=>1,
    'parent_id'=>random_int(7,20),
    ];
});

$factory->define(App\post::class, function (Faker\Generator $faker) {
    return [
    'Title'=>$temp=$faker->text(50),
    'slug'=>str_slug($temp,'-'),
    'Description'=>$faker->text(500),
    'UseDescription'=>$faker->text(500),
    'ContentPost'=>$faker->text(10000),
    'Picture'=>$faker->imageUrl(640,480),
    'Seen'=>1,
    'Active'=>1,
        'views'=>1,
    'topic_id'=>random_int(21, 79),
    'user_id'=>random_int(1, 2),

    ];
});
