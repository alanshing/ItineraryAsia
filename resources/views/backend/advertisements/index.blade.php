@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Advertisements</h5>
@endsection

@section('content')
    <div class= "card-body">
        <a href="{{ route('advertisements.create') }}" class="btn btn-secondary float-right">Create New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Advertiser</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($advertisements as $advertisement)
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('advertisements.show', ['advertisement' => $advertisement->id]) }}">{{ $advertisement->name }}</a>
                        </td>
                        <td>{{ $advertisement->description }}</td>
                        <td>{{ $advertisement->user()->first()->name }}</td>
                        <td class="text-right">
                            <a class="btn btn-secondary" href="{{ route('advertisements.edit', ['advertisement' => $advertisement->id]) }}">Edit</a>
                        </td>
                        <td>
                            <form id="delete-form" action="{{ route('advertisements.destroy', ['advertisement' => $advertisement->id]) }}" method="POST">
                                {{ method_field('DELETE')}}
                                {!! csrf_field() !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="center">{{ $advertisements->links() }}</div>
    </div>
@endsection
