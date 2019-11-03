<?php


use Illuminate\Database\Seeder;


class CreateLanguages extends Seeder
{

  public function run()
  {
    \DB::table('languages')->insert(['name' => 'English', 'code' => 'en', 'flag' => 'en.png']);
    \DB::table('languages')->insert(['name' => 'Khmer', 'code' => 'kh', 'flag' => 'kh.png']);
    // \DB::table('languages')->insert(['name' => 'Thai', 'code' => 'th', 'flag' => 'th.png']);
    // \DB::table('languages')->insert(['name' => 'Franch', 'code' => 'fr', 'flag' => 'fr.png']);
    // \DB::table('languages')->insert(['name' => 'German', 'code' => 'de', 'flag' => 'de.png']);
  }
}