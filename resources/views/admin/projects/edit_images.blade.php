<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/projects/edit_images.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Images for {{ $project->title_en }}</h1>
    <form action="{{ route('admin.projects.images.add', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row" id="image-preview"></div>
        <div class="mb-3">
            <label for="images" class="form-label">Select Images</label>
            <input type="file" name="images[]" class="form-control" id="images" multiple onchange="previewImages()">
        </div>
        
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>

    <h2>Existing Images</h2>
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-3">
                <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $project->title_en }}" class="img-fluid">
                <form action="{{ route('admin.projects.images.delete', [$project->id, $image->id]) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        @endforeach
    </div>
</div>

<script>
function previewImages() {
    var preview = document.getElementById('image-preview');
    preview.innerHTML = '';
    var files = document.getElementById('images').files;

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var reader = new FileReader();

        reader.onload = function(e) {
            var img = document.createElement('img');
            img.setAttribute('src', e.target.result);
            img.setAttribute('class', 'img-fluid col-md-3');
            preview.appendChild(img);
        }

        reader.readAsDataURL(file);
    }
}
</script>
@endsection