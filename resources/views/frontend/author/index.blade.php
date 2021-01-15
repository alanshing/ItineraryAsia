@extends('layouts.frontend')

@section('content')
    <div class="home-inner">
        <div class="container">
            <div class="row">
                @foreach ($authors as $author)
                    <div class="col-md-4">
                        <a href="{{ route('author.show', ['author' => $author->name]) }}">
                            <img style="width: 100%" src="/storage/images/profile/{{$author->profile}}">
                            <h5>{{ $author->name }}</h5>
                        </a>
                    </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection