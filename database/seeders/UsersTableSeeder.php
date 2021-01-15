<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $advertiserRole = Role::where('name', 'advertiser')->first();

        User::truncate();

        /**
         * Create user for admin role
         */
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'profile' =>'noimage.jpg',
        ]);

        $admin->roles()->attach($adminRole);

        /**
         * Create user for author role
         */
        $author = User::create([
            'name' => 'Author',
            'email' => 'author@author.com',
            'password' => bcrypt('author'),
            'profile' =>'noimage.jpg',
        ]);

        $author->roles()->attach($authorRole);

        /**
         * Create user for advertiser role
         */
        $advertiser = User::create([
            'name' => 'Advertiser',
            'email' => 'advertiser@advertiser.com',
            'password' => bcrypt('advertiser'),
            'profile' =>'noimage.jpg',
        ]);

        $advertiser->roles()->attach($advertiserRole);
    }
}
