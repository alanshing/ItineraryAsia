@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Edit Advertisement</h5>
@endsection

@section('content')
    <div class="card-body">
        <h1>Edit {{ $advertisement->name }}</h1>
        <form action="{{ route('advertisements.update', ['advertisement' => $advertisement->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $advertisement->name }}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description">{{ $advertisement->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $advertisement->title }}">
            </div>

            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ $advertisement->url }}">
            </div>

            <div class="form-group">
                <img style="width: 50%" src="/storage/advertisements/{{$advertisement->content}}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <input type="file" id="content" name="content">
            </div>
            
            <div class="form-group">
                <label for="published_at">Published Date / Time</label>
                <input type="text" class="form-control" id="published_at" name="published_at" value="{{ $advertisement->published_at }}" data-target="#published_at" data-toggle="datetimepicker">
            </div>
            
            <div class="form-group">
                <label for="ended_at">End Date / Time</label>
                <input type="text" class="form-control" id="ended_at" name="ended_at" value="{{ $advertisement->ended_at }}" data-target="#ended_at" data-toggle="datetimepicker">
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