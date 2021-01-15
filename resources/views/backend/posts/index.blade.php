@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Posts</h5>
@endsection

@section('content')
    <div class="card-body">
        <a href="{{ route('posts.create') }}" class="btn btn-secondary float-right">Create New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Published</th>
                    <th>Author</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($posts as $post)
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
                        </td>
                        <td>{{ $post->slug }}</td>
                        <td>{{ $post->published_at }}</td>
                        <td>{{ $post->user()->first()->name }}</td>
                        <td class="text-right">
                            <a class="btn btn-secondary" href="{{ route('posts.edit', ['post' => $post->id]) }}">Edit</a>
                        </td>
                        <td>
                            <form id="delete-form" action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
                                {{ method_field('DELETE')}}
                                {!! csrf_field() !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="center">{{ $posts->links() }}</div>
    </div>
@endsection
