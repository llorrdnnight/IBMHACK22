<?php
  use Illuminate\Database\Seeder;

  class DatabaseSeeder extends Seeder
  {
    public function run(){
    $this->(UserTabelSeeder::class);
    $this->(RecipesTabelSeeder::class);
    $this->(FavouritesTableSeeder::class);
    $this->(OrdersTableSeeder::class);
    $this->(IngredientsTableSeeder::class);
    $this->(AllergenenTableSeeder::class);

    //veel veel
    $this->(Ingredient_OrderTableSeeder::class);
    $this->(Ingredient_RecipeTableSeeder::class);
    $this->(Ingredient_UserTableSeeder::class);
    $this->(Allergenen_RecipeTableSeeder::class);
    }

  }
?>
