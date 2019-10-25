<?php
  use Illuminate\Database\Seeder;

  class RecipestableSeeder extends Seeder
  {
    public function run(){
    factory(\App\Recipe::class, 5)->create();
    }

  }
?>
