<?php
  use Illuminate\Database\Seeder;

  class FavouritesTableSeeder extends Seeder
  {
    public function run(){
    factory(\App\Favourite::class, 5)->create();
    }

  }
?>
