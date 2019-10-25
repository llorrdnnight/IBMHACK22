<?php

  use Faker\Generator as Faker;

  $factory->define(\App\User::class, function (Faker $faker){
    return [
      'isAdmin'=> 0,
      'isSeller' => 0,
      'name' => $faker->name,
      'email'=> $faker->unique()->safeEmail,
      'password' => $faker->word,
      'email_verified_at'=> now(),

    ];

  });
?>
