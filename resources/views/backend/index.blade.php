@extends('layouts.backend')

@section('content')
    <!-- Authentication Links -->
    @guest
    <div id="home-section">
        <div class="dark-overlay">
            <div class="home-inner">
                <div class="container">
                    <div class="jumbotron text-center">
                        <h1>
                            {{ config('app.name', 'Laravel') }}
                        </h1>
                        <p>
                            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        @section('header')
            <h5 class="card-header main-color-bg">Welcome</h5>
        @endsection
        @section('content')            
            <div class="card-body">
            </div>
        @endsection
    @endguest
@endsection
