<?php
  use Illuminate\Database\Seeder;

  class Allergens_RecipesTableSeeder extends Seeder
  {
    public function run(){
    // Allergens_Recipes Seeder calls on Allergens_RecipesTableFactory
    // And makes 5 objects of it.
    factory(\App\Allergens_RecipesTableFactory::class, 5)->create();
    }

  }
?>
