<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/projects/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Project for {{ $service->title_en }}</h1>
    <form action="{{ route('admin.projects.store', $service) }}" method="POST">
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
            <label for="client" class="form-label">Client</label>
            <input type="text" class="form-control @error('client') is-invalid @enderror" id="client" name="client" value="{{ old('client') }}" required>
            @error('client')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="delivery_date" class="form-label">Delivery Date</label>
            <input type="date" class="form-control @error('delivery_date') is-invalid @enderror" id="delivery_date" name="delivery_date" value="{{ old('delivery_date') }}" required>
            @error('delivery_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="delivery_duration" class="form-label">Delivery Duration (days)</label>
            <input type="number" class="form-control @error('delivery_duration') is-invalid @enderror" id="delivery_duration" name="delivery_duration" value="{{ old('delivery_duration') }}" required>
            @error('delivery_duration')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Add Project</button>
    </form>
</div>

@endsection
