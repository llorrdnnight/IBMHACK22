<?php

  use Faker\Generator as Faker;

  // Allergens factory
  $factory->define(\App\Allergen::class, function (Faker $faker){
    return [
      'naam' => $faker-> name,

    ];

  });
?>
