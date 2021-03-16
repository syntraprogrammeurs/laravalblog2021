<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(['name'=>'ADIDAS','description'=>'Beschrijving ADIDAS']);
        DB::table('brands')->insert(['name'=>'NIKE','description'=>'Beschrijving NIKE']);
        DB::table('brands')->insert(['name'=>'LACOSTE','description'=>'Beschrijving LACOSTE']);
    }
}
