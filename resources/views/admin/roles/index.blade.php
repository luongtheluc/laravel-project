@extends('admin.layouts.app')
@section('title', 'Roles')
@section('content')
    <div class="card">
        <h1>Roles list</h1>

        <div>
            <a href="{{ route('roles.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div>

            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Display Name</th>
                    <th>Group</th>
                    @foreach ($roles as $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>{{ $role->displayname }}</td>
                    <td>{{ $role->group }}</td>
                </tr>
                @endforeach

                </tr>
            </table>

            {{ $roles->links() }}
        </div>
    </div>
@endsection
