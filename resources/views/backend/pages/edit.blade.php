@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Edit Page</h5>
@endsection

@section('content')
    <div class="card-body">
        <h1>Edit {{ $page->title }}</h1>
        <form action="{{ route('pages.update', ['page' => $page->id]) }}" method="POST">
            {{ method_field('PUT') }}
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}">
            </div>
            <div class="form-group">
                <label for="url">URL</label>
                <input type="text" class="form-control" id="url" name="url" value="{{ $page->url }}">
            </div>
            <div class="form-group row">
                <div class="col-md-12">
                    <label>Order</label>
                </div>
                <div class="col-md-2">
                    <select name="order" id="order" class="form-control">
                        <option value=""></option>
                        <option value="before">Before</option>
                        <option value="after">After</option>
                        <option value="child">Child</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <select name="orderPage" id="orderPage" class="form-control">
                        <option value=""></option>
                        @foreach($orderPages as $page)
                            <option value="{{ $page->id }}">{!! $page->present()->paddedTitle !!}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content">{{ $page->content }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-secondary" value="Submit">
            </div>
        </form>
</div>
@endsection

@section('scripts')
    @include('backend.pages.partials.scripts')
@endsection