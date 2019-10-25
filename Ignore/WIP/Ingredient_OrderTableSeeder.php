<?php
  use Illuminate\Database\Seeder;

  class Ingredient_OrderTableSeeder extends Seeder
  {
    public function run(){
    factory(\App\Ingredient_Order::class, 5)->create();
    //factory(\App\Ingredient::class, 5)->create();
    //factory(\App\Order::class, 3) ->create();
    }

  }
?>
