@extends('layouts.frontend')

@section('content')
    <div class="home-inner">
        <div class="container">
            <h2>{{ $page->title }}</h2>
            <p>{!! $page->content !!}</p>
        </div>
    </div>
@endsection
