@extends('layouts.frontend')

@section('content')
    <!--Header-->
    <header id="header">
        <div class="dark-overlay">
            <div class="home-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10">
                            <h1>Itinerary Asia</h1>
                        </div>
                        <div class="col-md-10">
                            <p>Welcome to Itinerary Asia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Divider-->
    <section class="divider">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-4">
                        <h1>Latest Post</h1>
                        <p class="lead">Bringing the latest information to you</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section-->
    <div id="latest" class="bg-light text-muted p-5">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-3">
                        <h2><a href="{{ route('post.show', ['post' => $post->slug]) }}">{{ $post->title }}</a></h2>
                        <p>{{ $post->user()->first()->name }}</p>
                        <p>{{ $post->present()->publishedDate }}</p>
                        <img style="width: 100%" src="/storage/images/cover/{{$post->cover}}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!--Divider-->
    <section class="divider">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="p-4">
                        <h1>About Us</h1>
                        <p class="lead">Itinerary Asia brings to you the latest information about Malaysia Itinerary</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Section-->
    <div id="contact" class="bg-light text-muted p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="background-image: url(img/mobile.jpg); background-position: center; background-repeat: no-repeat; background-size: cover">
                    <form method="POST" action="">
                        {!! csrf_field() !!}
            
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="10">{{ old('message') }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-secondary" value="Submit">
                        </div>
                    </form>
                </div>

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
            </div>
        </div>
    </div>
@endsection
