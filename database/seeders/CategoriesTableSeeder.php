<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert(['name'=>'Nieuws']);
        DB::table('categories')->insert(['name'=>'Sport']);
        DB::table('categories')->insert(['name'=>'Politiek']);
    }
}
