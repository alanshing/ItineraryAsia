@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Page</h5>
@endsection

@section('content')
    <div class="card-body">
        <h2>{{ $page->title }}</h2>
        <p>{!! $page->content !!}</p>

        <form id="delete-form" action="{{ route('pages.destroy', ['page' => $page->id]) }}" method="POST">
            {{ method_field('DELETE')}}
            {!! csrf_field() !!}
            <input type="submit" value="Delete" class="btn btn-danger float-right">
        </form>
        <a class="btn btn-secondary" href="{{ route('pages.edit', ['page' => $page->id]) }}">Edit</a>
    </div>
@endsection
