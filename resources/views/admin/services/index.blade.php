<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/services/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Services</h1>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">Add Service</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            @php
                $title = "title_".app()->getLocale();
                $desc = "desc_".app()->getLocale();
            @endphp
                <tr>
                    <td>{{ $service->$title }}</td>
                    <td>{{ $service->$desc }}</td>
                    <td><img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" width="100"></td>
                    <td>
                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('admin.projects.create', $service) }}" class="btn btn-success">Add Project</a>
                        <a href="{{ route('admin.projects.index', $service) }}" class="btn btn-info">View Projects</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
