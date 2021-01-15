@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">User</small></h5>
@endsection

@section('content')
    <div class="card-body">
        <h1>{{ $user->name }}</h1>
        <img style="width: 30%" src="/storage/images/profile/{{$user->profile}}">
        <p>{{ $user->email }}</p>
        <p>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</p>

        <form id="delete-form" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
            {{ method_field('DELETE')}}
            {!! csrf_field() !!}
            <input type="submit" value="Delete" class="btn btn-danger float-right">
        </form>
        <a class="btn btn-secondary" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
    </div>
@endsection