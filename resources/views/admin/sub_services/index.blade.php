<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/sub_services/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>SubServices for {{ $service->title_en }}</h1>
    <a href="{{ route('admin.sub-services.create', $service) }}" class="btn btn-primary">Add SubService</a>
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
            @forelse($subServices as $subService)
                <tr>
                    <td>{{ $subService->title_en }}</td>
                    <td>{{ $subService->desc_en }}</td>
                    <td>
                        @if($subService->image)
                            <img src="{{ asset('storage/' . $subService->image) }}" alt="{{ $subService->title_en }}" width="100">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.sub-services.edit', [$service, $subService]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.sub-services.destroy', [$service, $subService]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No sub-services found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection