@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Pages</h5>
@endsection

@section('content')
    <div class="card-body">
        <a href="{{ route('pages.create') }}" class="btn btn-secondary float-right">Create New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>URL</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($pages as $page)
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('pages.show', ['page' => $page->id]) }}">{!! $page->present()->paddedTitle !!}</a>
                        </td>
                        <td>{{ $page->url }}</td>
                        <td class="text-right">
                            <a class="btn btn-secondary" href="{{ route('pages.edit', ['page' => $page->id]) }}">Edit</a>
                        </td>
                        <td class="text-right">
                            <form id="delete-form" action="{{ route('pages.destroy', ['page' => $page->id]) }}" method="POST">
                                {{ method_field('DELETE')}}
                                {!! csrf_field() !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                </tbody>
            @endforeach
        </table>
        <div class="center">{{ $pages->links() }}</div>
    </div>
@endsection
