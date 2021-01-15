<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Advertisement;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['layouts.frontend'], function($view) {
            $view->with('pages', Page::get()->toTree())->with('tags', Tag::all())->with('categories', Category::all());
        });

        View::composer(['layouts.backend'], function($view) {
            $view->with('pages', Page::all())->with('posts', Post::all())->with('users', User::all())->with('tags', Tag::all())->with('categories', Category::all())->with('advertisements', Advertisement::all());
        });
    }
}
