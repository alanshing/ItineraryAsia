<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Advertisement;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function backend()
    {
        return view('backend.index');
    }

    public function frontend()
    {
        $posts = Post::where('published_at', '<', Carbon::now())->orderBy('published_at', 'DESC')->take(4)->get();
        $advertisements = Advertisement::where('published_at', '<', Carbon::now())->orderBy('published_at', 'DESC')->take(2)->get();
        return view('frontend.index')->with('posts', $posts)->with('advertisements', $advertisements);
    }
}
