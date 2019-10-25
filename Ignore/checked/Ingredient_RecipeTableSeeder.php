<?php
  use Illuminate\Database\Seeder;

  class Ingredient_RecipeTableSeeder extends Seeder
  {
    public function run(){
    factory(\App\Ingredient_recipe::class, 5)->create();
    }

  }
?>
