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
        'Lastlogin'=>$faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'Birthday'=>$faker->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        'Avatar'=>$faker->imageUrl($width = 640, $height = 480),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),

    ];
});
/*
$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
    'name'=>$faker->name,
    'Discription'=>$faker->text,
    ];
});
$factory->define(App\Topic::class, function (Faker\Generator $faker) {
    return [
    'name'=>$faker->name,
    'Discription'=>$faker->text(500),
    'category_id'=>function(){
        return factory(App\Category::class)->create()->id;
    },
    ];
});
*/
$factory->define(App\post::class, function (Faker\Generator $faker) {
    return [
    'Title'=>$faker->text(200),
    'Description'=>$faker->text(500),
    'UseDescription'=>$faker->text(500),
    'ContentPost'=>$faker->text(10000),
    'Picture'=>$faker->imageUrl(640,480),
    'Seen'=>1,
    'Active'=>1,
    'topic_id'=>random_int(15, 18),
    'user_id'=>1,

    ];
});
