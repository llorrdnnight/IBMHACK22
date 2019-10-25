<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Allergens_Recipes::class, function (Faker $faker){
    return [
      'allergen_id' => factory(\App\Allergen::class)->create(),
      'recipe_id' =>  factory(\App\Recipe::class)->create(),

    ];

  });
?>
