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
                <th>Banner</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($services as $service)
                <tr>
                    <td>{{ $service->title_en }}</td>
                    <td>{{ $service->desc_en }}</td>
                    <td>
                        @if($service->image)
                            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title_en }}" width="100">
                        @endif
                    </td>
                    <td>
                        @if($service->banner)
                            <img src="{{ asset('storage/' . $service->banner) }}" alt="{{ $service->title_en }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('admin.sub-services.index', $service) }}" class="btn btn-info">Manage SubServices</a>
                        <a href="{{ route('admin.projects.index', $service) }}" class="btn btn-success">Manage Projects</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No services found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
