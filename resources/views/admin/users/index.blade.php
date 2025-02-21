<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/users/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Users</h1>
    <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add User</a>
    <table class="table">
        <thead>
            <tr>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Avatar</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td>
                        @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->name }}" width="50">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">No users found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection