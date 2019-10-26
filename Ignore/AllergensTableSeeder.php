<?php
  use Illuminate\Database\Seeder;

  class AllergensTableSeeder extends Seeder
  {
    public function run(){
    // AllergensTableSeeder does call upon the AllergensFactory
    factory(\App\Allergen::class, 3)->create();
    }

  }
?>
