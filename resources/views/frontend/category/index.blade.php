@extends('layouts.frontend')

@section('content')
    <div class="home-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    @foreach ($advertisements as $advertisement)
                        <div class="ads">
                            <a href="{{$advertisement->url}}" target="_blank">
                                <img style="width: 100%; height: 100%" src="/storage/advertisements/{{$advertisement->content}}" title="{{$advertisement->title}}"></img>
                            </a>
                        </div>
                        <br>
                    @endforeach
                </div>

                <div class="col-md-6">
                    <div class="row">
                        @foreach ($categories as $category)
                            <div class="col-md-4">
                                <h5>
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list-ul" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                    </svg>
                                    <a href="{{ route('category.show', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                </h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection