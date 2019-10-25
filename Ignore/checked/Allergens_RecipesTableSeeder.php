<?php
  use Illuminate\Database\Seeder;

  class Allergens_RecipesTableSeeder extends Seeder
  {
    public function run(){
    factory(\App\Allergens_RecipesTableFactory::class, 5)->create();
    }

  }
?>
