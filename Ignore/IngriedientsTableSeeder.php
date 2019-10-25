<?php
  use Illuminate\Database\Seeder;

  class IngredientsTableSeeder extends Seeder
  {
    public function run(){
    factory(\App\Ingredient::class, 5)->create();
    }

  }
?>
