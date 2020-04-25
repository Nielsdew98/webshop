<?php

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
        DB::table('categories')->insert([
            'name'=>'Co-op'
        ]);
        DB::table('categories')->insert([
            'name'=>'Adventure'
        ]);
        DB::table('categories')->insert([
            'name'=>'Fantasy'
        ]);
        DB::table('categories')->insert([
            'name'=>'Science Fiction'
        ]);

        DB::table('categories')->insert([
            'name'=>'Horror',
        ]);
    }
}
