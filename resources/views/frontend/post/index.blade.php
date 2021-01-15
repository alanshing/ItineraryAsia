@extends('layouts.frontend')

@section('content')
    <div class="home-inner">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <img style="width: 100%" src="/storage/images/cover/{{$post->cover}}">
                        <h2><a href="{{ route('post.show', ['post' => $post->slug]) }}">{{ $post->title }}</a></h2>
                        <p>{{ $post->user()->first()->name }}</p>
                        <p>{{ $post->present()->publishedDate }}</p>
                    </div>
                @endforeach
            </div>

            <div class="center">{{ $posts->links() }}</div>
        </div>
    </div>
@endsection