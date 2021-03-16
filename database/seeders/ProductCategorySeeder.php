<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_categories')->insert(['name'=>'SCHOENEN','description'=>'Beschrijving SCHOENEN']);
        DB::table('product_categories')->insert(['name'=>'HEMDEN','description'=>'Beschrijving HEMDEN']);
        DB::table('product_categories')->insert(['name'=>'SOKKEN','description'=>'Beschrijving SOKKEN']);
    }
}
