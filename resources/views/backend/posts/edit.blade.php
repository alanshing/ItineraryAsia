@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Edit Post</h5>
@endsection

@section('content')
    <div class="card-body">
        <h1>Edit {{ $post->title }}</h1>
        <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}">
            </div>
            <div class="form-group">
                <img style="width: 50%" src="/storage/images/cover/{{$post->cover}}">
            </div>
            <div class="form-group">
                <label for="cover">Cover Image</label>
                <input type="file" id="cover" name="cover">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body">{{ $post->body }}</textarea>
            </div>
            <div class="form-group position-relative">
                <label for="published_at">Published Date / Time</label>
                <input type="text" class="form-control datetimepicker-input" id="published_at" name="published_at" value="{{ $post->published_at }}" data-target="#published_at" data-toggle="datetimepicker">
            </div>
            
            <div class="form-group">
                <label>Tags</label>
                <div class="row">
                    @foreach ($tags as $tag)
                        <div class="col-md-3">
                            <input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ $post->hasTag($tag->name)?'checked':'' }}> {{ $tag->name }}
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="form-group">
                <label>Categories</label>
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-md-3">
                            <input type="checkbox" name="categories[]" value="{{ $category->id }}" {{ $post->hasCategory($category->name)?'checked':'' }}> {{ $category->name }}
                        </div>
                    @endforeach
                </div>
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" value="Submit">
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    @include('backend.posts.partials.scripts')
@endsection