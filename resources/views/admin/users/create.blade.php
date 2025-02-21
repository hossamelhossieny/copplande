<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/users/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add User</h1>
    <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select name="role" class="form-control" required>
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="employee">Employee</option>
            <option value="customer">Customer</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" name="avatar" class="form-control" id="avatar" onchange="previewAvatar(event)">
            <img id="avatar-preview" src="#" alt="Avatar Preview" style="display: none; margin-top: 10px; max-width: 200px;">
        </div>

        <script>
            function previewAvatar(event) {
            var reader = new FileReader();
            reader.onload = function(){
                var output = document.getElementById('avatar-preview');
                output.src = reader.result;
                output.style.display = 'block';
            };
            reader.readAsDataURL(event.target.files[0]);
            }
        </script>
        <button type="submit" class="btn btn-primary">Add User</button>
    </form>
</div>
@endsection