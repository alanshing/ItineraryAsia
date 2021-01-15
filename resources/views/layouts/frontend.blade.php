<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ItineraryAsia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/frontend.custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <!--Header-->
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src={{ asset("images/itinerarylogo-01.png") }} alt="itinerarylogo" class="logo"/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a class="nav-link" href="{{ route('post.index') }}">Post</a></li>
                        <li><a class="nav-link" href="{{ route('tag.index') }}">Tag</a></li>
                        <li><a class="nav-link" href="{{ route('category.index') }}">Category</a></li>
                        <li><a class="nav-link" href="{{ route('author.index') }}">Author</a></li>
                        <li><a class="nav-link" href="{{ route('backend') }}">Login/Register</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @foreach ($pages as $page)
                            @if(count($page->children))
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" role="button" aria-expanded="false" data-toggle="dropdown">
                                        {{ $page->title }}
                                        <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu">
                                        <a href="{{ $page->url }}" class="dropdown-item">
                                            {{ $page->title }}
                                        </a>
                                        @foreach($page->children as $child)
                                            <a href="{{ $child->url }}" class="dropdown-item">
                                                {{ $child->title }}
                                            </a>
                                        @endforeach
                                    </div>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a href="{{ $page->url }}" class="nav-link" role="button" aria-expanded="false">
                                        {{ $page->title }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!--Footer-->
    <footer id="footer">
        <p>All Rights Reserved. &copy; 2020</p>
    </footer>
</body>
</html>
