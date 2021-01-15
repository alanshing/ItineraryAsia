@extends('layouts.backend')

@section('header')
    <h5 class="card-header main-color-bg">Users</h5>
@endsection

@section('content')
    <div class= "card-body">
        <a href="{{ route('users.create') }}" class="btn btn-secondary float-right">Create New</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($users as $user)
                <tbody>
                    <tr>
                        <td>
                            <a href="{{ route('users.show', ['user' => $user->id]) }}">{{ $user->name }}</a>
                        </td>
                        <td>{{ $user->email }}</td>
                        <td>{{ implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                        <td class="text-right">
                            <a class="btn btn-secondary" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                        </td>
                        <td>
                            <form id="delete-form" action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                                {{ method_field('DELETE')}}
                                {!! csrf_field() !!}
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        <div class="center">{{ $users->links() }}</div>
    </div>
@endsection
