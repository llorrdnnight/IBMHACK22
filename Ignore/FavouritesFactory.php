<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Favourite::class, function (Faker $faker){
    return [
      'recipe_id' => factory(\App\Recipe::class)->create(),
      'user_id' => factory(\App\User::class)->create(),

    ];

  });
?>
