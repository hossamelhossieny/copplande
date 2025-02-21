<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/sub_services/edit.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit SubService for {{ $service->title_en }}</h1>
    <form action="{{ route('admin.sub-services.update', [$service, $subService]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title_en" class="form-label">Title (English)</label>
            <input type="text" name="title_en" class="form-control" value="{{ $subService->title_en }}" required>
        </div>
        <div class="mb-3">
            <label for="desc_en" class="form-label">Description (English)</label>
            <textarea name="desc_en" class="form-control" required>{{ $subService->desc_en }}</textarea>
        </div>
        <div class="mb-3">
            <label for="title_ar" class="form-label">Title (Arabic)</label>
            <input type="text" name="title_ar" class="form-control" value="{{ $subService->title_ar }}" required>
        </div>
        <div class="mb-3">
            <label for="desc_ar" class="form-label">Description (Arabic)</label>
            <textarea name="desc_ar" class="form-control" required>{{ $subService->desc_ar }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control">
            @if($subService->image)
                <img src="{{ asset('storage/' . $subService->image) }}" alt="{{ $subService->title_en }}" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update SubService</button>
    </form>
</div>
@endsection