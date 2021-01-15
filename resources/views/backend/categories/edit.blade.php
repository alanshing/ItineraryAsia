@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Edit Category</h5>
@endsection

@section('content')
    <div class="card-body">
        <h1>Edit {{ $category->name }}</h1>
        <form action="{{ route('categories.update', ['category' => $category->id]) }}" method="POST">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>
            
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" id="slug" name="slug" value="{{ $category->slug }}">
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-secondary" value="Submit">
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    @include('backend.categories.partials.scripts')
@endsection