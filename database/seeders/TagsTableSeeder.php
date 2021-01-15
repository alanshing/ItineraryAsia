<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();

        /**
         * Create two tags
         */
        Tag::create(['name'=>'Travel', 'slug'=>'travel']);
        Tag::create(['name'=>'Asia', 'slug'=>'asia']);
    }
}
