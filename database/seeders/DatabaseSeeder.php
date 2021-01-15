<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        /**
         * Calling to run other Table seeder
         * Roles Table Seeder and Users Table Seeder
         */
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            PagesTableSeeder::class,
            TagsTableSeeder::class,
            CategoriesTableSeeder::class,
            PostsTableSeeder::class,
        ]);
    }
}
