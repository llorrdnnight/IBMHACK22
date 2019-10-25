<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Order::class, function (Faker $faker){
    return [
      'user_id' => factory(\App\User::class)->create(),
      'price' => $faker -> randDigit(0,10),
      'adress' => $faker -> streetAddress,
      'detail' => $faker -> text,
      'delivery' => $faker -> dateTime,

    ];

  });
?>
