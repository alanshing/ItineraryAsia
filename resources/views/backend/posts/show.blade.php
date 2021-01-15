@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Post</h5>
@endsection

@section('content')
    <div class="card-body">
        <h2>{{ $post->title }}</h2>
        <small>Published by {{ $post->user->name }} on {{ $post->present()->publishedDate }}</small>
        <img style="width: 100%" src="/storage/images/cover/{{$post->cover}}">
        <p>{!! $post->body !!}</p>
        <p>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tags" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z"/>
                <path fill-rule="evenodd" d="M5.5 5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                <path d="M1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z"/>
            </svg>
            {{ implode(', ', $post->tags()->get()->pluck('name')->toArray()) }}
        </p>
        <p>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
            </svg>
            {{ implode(', ', $post->categories()->get()->pluck('name')->toArray()) }}
        </p>
        <form id="delete-form" action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
            {{ method_field('DELETE')}}
            {!! csrf_field() !!}
            <input type="submit" value="Delete" class="btn btn-danger float-right">
        </form>
        <a class="btn btn-secondary" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
    </div>
@endsection
