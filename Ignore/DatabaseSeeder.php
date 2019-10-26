<?php
  use Illuminate\Database\Seeder;

  class DatabaseSeeder extends Seeder
  {
    public function run(){
    // Intialize table mock data
    $this->(UserTabelSeeder::class);
    $this->(RecipesTabelSeeder::class);
    $this->(FavouritesTableSeeder::class);
    $this->(OrdersTableSeeder::class);
    $this->(IngredientsTableSeeder::class);
    $this->(AllergenenTableSeeder::class);

    // Initialze Between-table mock data (make extra table mock data)
    $this->(Ingredient_OrderTableSeeder::class);
    $this->(Ingredient_RecipeTableSeeder::class);
    $this->(Ingredient_UserTableSeeder::class);
    $this->(Allergenen_RecipeTableSeeder::class);
    }

  }
?>
