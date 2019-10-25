
<?php

  use Faker\Generator as Faker;

  $factory->define(\App\Ingredient_Order::class, function (Faker $faker){
    return [

      'ingredient_id' => factory(\App\Ingredient::class, 5)->create(),
      'order_id' =>   factory(\App\Order::class, 3) ->create(),
      'price' => $faker -> randomDigit(0, 100),
      'amount' => $faker -> randomDigit(1, 10),

    ];

  });
  //factory(\App\Ingredient::class, 5)->create();
  //factory(\App\Order::class, 3) ->create();
?>
