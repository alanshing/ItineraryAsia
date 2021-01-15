<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Find tag
         */
        $travelTag = Tag::where('name', 'Travel')->first();
        $asiaTag = Tag::where('name', 'Asia')->first();

        /**
         * Find category
         */
        $oneDayCategory = Category::where('name', 'One Day Trip')->first();
        $twoDaysCategory = Category::where('name', 'Two Days Trip')->first();

        $admin = User::find(1);

        Post::truncate();

        /**
         * Create new post 1
         */
        $post1 = Post::create([
            'title' => 'Post 1',
            'slug' => 'post-1',
            'body' => 'Post One',
            'user_id' => $admin->id
        ]);

        $post1->tags()->attach($travelTag);
        $post1->categories()->attach($oneDayCategory);

        /**
         * Create new post 2
         */
        $post2 = Post::create([
            'title' => 'Post 2',
            'slug' => 'post-2',
            'body' => 'Post Two',
            'user_id' => $admin->id
        ]);

        $post2->tags()->attach($asiaTag);
        $post2->categories()->attach($twoDaysCategory);
    }
}
