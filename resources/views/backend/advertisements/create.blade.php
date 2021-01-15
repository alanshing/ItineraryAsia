@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Create Advertisement</h5>
@endsection

@section('content')
    <div class="card-body">
        <h1>Create New Advertisement</h1>
        <form method="POST" action="{{ route('advertisements.store') }}" enctype="multipart/form-data">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <input type="file" id="content" name="content">
            </div>
            
            <div class="form-group">
                <label for="published_at">Published Date / Time</label>
                <input type="text" class="form-control" id="published_at" name="published_at" value="{{ old('published_at') }}" data-target="#published_at" data-toggle="datetimepicker">
            </div>
            
            <div class="form-group">
                <label for="ended_at">End Date / Time</label>
                <input type="text" class="form-control" id="ended_at" name="ended_at" value="{{ old('ended_at') }}" data-target="#ended_at" data-toggle="datetimepicker">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" value="Submit">
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    @include('backend.advertisements.partials.scripts')
@endsection