<?php
  use Illuminate\Database\Seeder;

  class Ingredient_UserTableSeeder extends Seeder
  {
    public function run(){
    factory(\App\Ingredient_User::class, 5)->create();
    }

  }
?>
