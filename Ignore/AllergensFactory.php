<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Allergen::class, function (Faker $faker){
    return [
      'naam' => $faker-> name,

    ];

  });
?>
