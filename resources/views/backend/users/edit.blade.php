@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Edit User</h5>
@endsection

@section('content')
    <div class="card-body">
        <h1>Edit {{ $user->name }}</h1>
        <form action="{{ route('users.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>
            </div>

            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">
            </div>
            
            <div class="form-group">
                <input type="file" id="profile" name="profile">
            </div>
            
            @if(Auth::user()->isAdmin())
                @foreach ($roles as $role)
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="roles[]" value="{{ $role->id }}" {{ $user->hasRole($role->name)?'checked':'' }}> {{ $role->name }}
                        </label>
                    </div>
                @endforeach
            @endif

            <div class="form-group">
                <input type="submit" class="btn btn-secondary" value="Submit">
            </div>
        </form>
    </div>
@endsection
