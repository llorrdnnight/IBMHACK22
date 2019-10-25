<?php
  use Illuminate\Database\Seeder;

  class AllergensTableSeeder extends Seeder
  {
    public function run(){
    factory(\App\Allergen::class, 5)->create();
    }

  }
?>
