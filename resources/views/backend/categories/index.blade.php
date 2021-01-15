@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Categories</h5>
@endsection

@section('content')
    <div class= "card-body">
        <a href="{{ route('categories.create') }}" class="btn btn-secondary float-right">Create New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Slug</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($categories as $category)
                <tbody>
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td class="text-right">
                            <a class="btn btn-secondary" href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a>
                        </td>
                        <td>
                            <form id="delete-form" action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="POST">
                                {{ method_field('DELETE')}}
                                {!! csrf_field() !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="center">{{ $categories->links() }}</div>
    </div>
@endsection
