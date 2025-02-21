<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/sub_services/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add SubService to {{ $service->title_en }}</h1>
    <form action="{{ route('admin.sub-services.store', $service) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title_en" class="form-label">Title (English)</label>
            <input type="text" name="title_en" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="desc_en" class="form-label">Description (English)</label>
            <textarea name="desc_en" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="title_ar" class="form-label">Title (Arabic)</label>
            <input type="text" name="title_ar" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="desc_ar" class="form-label">Description (Arabic)</label>
            <textarea name="desc_ar" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image" onchange="previewImage(event)">
            <img id="image-preview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-width: 200px;">
        </div>
        <button type="submit" class="btn btn-primary">Add SubService</button>
    </form>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('image-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection