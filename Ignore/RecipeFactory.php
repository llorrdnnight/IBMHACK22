<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Recipe::class, function (Faker $faker){
    return [
      'name' => $faker -> name,
      'calories' => $faker -> randomDigit(0, 5000),
      'nutricion' => 'B',
      //'description' => $faker -> word,
      'recipe' => $faker -> text,

    ];

  });
?>
