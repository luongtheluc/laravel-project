@extends('admin.layouts.app')
@section('title', 'Create Roles')
@section('content')

    <div class="card">
        <h1>Create Roles</h1>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="input-group input-group-static mb-4">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{ $oldName }}" class="form-control">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="input-group input-group-static mb-4">
                <label for="displayname">Display Name</label>
                <input type="text" name="displayname" class="form-control">
            </div>

            <div class="input-group input-group-static mb-4">
                <label class="ms-0" name="group">Groups</label>
                <select name="group" class="form-control">
                    <option value="system">System</option>
                    <option value="user">User</option>
                </select>
            </div>

            <div class="form-check">
                <div class="row">
                    @foreach ($permissions as $groupName => $permission)
                        <div class="col-5">
                            <h4>{{ $groupName }}</h4>
                            <div>
                                @foreach ($permission as $item)
                                    <div class="form-check">
                                        <input class="form-check-input" name="permission_ids[]" type="checkbox"
                                            value="{{ $item->id }}">
                                        <label class="custom-control-label"
                                            for="customCheck1">{{ $item->displayname }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
