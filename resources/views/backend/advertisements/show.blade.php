@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Advertisement</h5>
@endsection

@section('content')
    <div class="card-body">
        <h2>{{ $advertisement->name }}</h2>
        <p>{{ $advertisement->description }}</p>
        
        <div class="ads">
            <a href="{{$advertisement->url}}" target="_blank">
                <img style="width: 100%; height: 100%" src="/storage/advertisements/{{$advertisement->content}}" title="{{$advertisement->title}}"></img>
            </a>
        </div>
        
        <p>Published: {{ $advertisement->published_at }} <br> Ended: {{ $advertisement->ended_at }}</p>
        <form id="delete-form" action="{{ route('advertisements.destroy', ['advertisement' => $advertisement->id]) }}" method="POST">
            {{ method_field('DELETE')}}
            {!! csrf_field() !!}
            <input type="submit" value="Delete" class="btn btn-danger float-right">
        </form>
        <a class="btn btn-secondary" href="{{ route('advertisements.edit', ['advertisement' => $advertisement->id]) }}">Edit</a>
    </div>
@endsection
