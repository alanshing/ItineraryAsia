@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Tags</h5>
@endsection

@section('content')
    <div class= "card-body">
        <a href="{{ route('tags.create') }}" class="btn btn-secondary float-right">Create New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($tags as $tag)
                <tbody>
                    <tr>
                        <td>{{ $tag->name }}</td>
                        <td>{{ $tag->slug }}</td>
                        <td class="text-right">
                            <a class="btn btn-secondary" href="{{ route('tags.edit', ['tag' => $tag->id]) }}">Edit</a>
                        </td>
                        <td>
                            <form id="delete-form" action="{{ route('tags.destroy', ['tag' => $tag->id]) }}" method="POST">
                                {{ method_field('DELETE')}}
                                {!! csrf_field() !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="center">{{ $tags->links() }}</div>
    </div>
@endsection
