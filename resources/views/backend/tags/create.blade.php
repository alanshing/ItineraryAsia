@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Create Tag</h5>
@endsection

@section('content')
    <div class="card-body">
        <h1>Create New Tag</h1>
        <form method="POST" action="{{ route('tags.store') }}">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') }}">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" value="Submit">
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    @include('backend.tags.partials.scripts')
@endsection