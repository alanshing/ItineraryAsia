<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        /**
         * Create two categories
         */
        Category::create(['name'=>'One Day Trip', 'slug'=>'one-day-trip']);
        Category::create(['name'=>'Two Days Trip', 'slug'=>'two-days-trip']);
    }
}
