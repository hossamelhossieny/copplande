<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/users/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>
    <form action="{{ route('admin.users.update', $user) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" value="{{ $user->username }}" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" class="form-control" required>
            <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
            <option value="manager" {{ $user->role == 'manager' ? 'selected' : '' }}>Manager</option>
            <option value="employee" {{ $user->role == 'employee' ? 'selected' : '' }}>Employee</option>
            <option value="customer" {{ $user->role == 'customer' ? 'selected' : '' }}>Customer</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" name="avatar" class="form-control" id="avatar">
            @if($user->avatar)
            <img src="{{ asset('storage/' . $user->avatar) }}" alt="{{ $user->name }}" width="100" id="avatar-preview">
            @endif
        </div>
        <div class="mb-3">
            <img id="new-avatar-preview" src="#" alt="New Avatar Preview" style="display: none;" width="100">
        </div>

        <script>
            document.getElementById('avatar').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.getElementById('new-avatar-preview');
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
            });
        </script>
        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection