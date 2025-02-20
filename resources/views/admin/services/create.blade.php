<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/services/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Service</h1>
    <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title_ar" class="form-label">Title Arabic</label>
                    <input type="text" class="form-control @error('title_ar') is-invalid @enderror" id="title_ar" name="title_ar" value="{{ old('title_ar') }}" required>
                    @error('title_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="desc_ar" class="form-label">Description Arabic</label>
                    <textarea class="form-control @error('desc_ar') is-invalid @enderror" id="desc_ar" name="desc_ar" rows="3" required>{{ old('desc_ar') }}</textarea>
                    @error('desc_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3">
                    <label for="title_en" class="form-label">Title English</label>
                    <input type="text" class="form-control @error('title_en') is-invalid @enderror" id="title_en" name="title_en" value="{{ old('title_en') }}" required>
                    @error('title_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="desc_en" class="form-label">Description English</label>
                    <textarea class="form-control @error('desc_en') is-invalid @enderror" id="desc_en" name="desc_en" rows="3" required>{{ old('desc_en') }}</textarea>
                    @error('desc_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-3">
            <label for="banner" class="form-label">Service Banner</label>
            <input type="file" class="form-control @error('banner') is-invalid @enderror" id="banner" name="banner" required onchange="previewBanner(event)">
            <img id="banner-preview" src="#" alt="Banner Preview" style="display: none; margin-top: 10px; max-width: 200px;">
            @error('banner')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" required onchange="previewImage(event)">
            <img id="image-preview" src="#" alt="Image Preview" style="display: none; margin-top: 10px; max-width: 200px;">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add Service</button>
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
    function previewBanner(event) {
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('banner-preview');
            output.src = reader.result;
            output.style.display = 'block';
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
