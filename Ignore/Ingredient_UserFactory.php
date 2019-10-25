<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Ingredient_User::class, function (Faker $faker){
    return [
      'Ingredient_id' => factory(\App\Ingredient::class)->create(),
      'User_id' =>  factory(\App\User::class)->create(),

    ];

  });
?>
