<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Ingredient_Recipe::class, function (Faker $faker){
    return [
      'Ingredient_id' => factory(\App\Ingredient::class)->create(),
      'Recipe_id' =>  factory(\App\Recipe::class)->create(),

    ];

  });
?>
