<?php
  use Illuminate\Database\Seeder;

  class DatabaseSeeder extends Seeder
  {
    public function run(){
    $this->(UserTabelSeeder::class);
    $this->(RecipiesTabelSeeder::class);
    $this->(FavouritesTableSeeder::class);
    $this->(OrdersTableSeeder::class);
    $this->(IngredientsTableSeeder::class);

    //veel veel
    $this->(Ingredient_OrderTableSeeder::class);
    }

  }
?>
