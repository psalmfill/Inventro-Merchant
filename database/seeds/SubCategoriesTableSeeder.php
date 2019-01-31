<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categories')->truncate();
        DB::table('sub_categories')->insert([
            ['id'=>1,'name'=>'Nokia'],
            ['id'=>2,'name'=>'Casing']
        ]);
    }
}
