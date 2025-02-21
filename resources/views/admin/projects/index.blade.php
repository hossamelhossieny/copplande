<!-- filepath: /Users/7ossam/Sites/copplande/resources/views/admin/projects/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Projects for {{ $service->title_en }}</h1>
    <a href="{{ route('admin.projects.create', $service) }}" class="btn btn-primary">Add Project</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Images</th>
                <th>Client</th>
                <th>Delivery Date</th>
                <th>Delivery Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($projects as $project)
            @php
                $title = "title_".app()->getLocale();
                $desc = "desc_".app()->getLocale();
            @endphp
                <tr>
                    <td>{{ $project->$title }}</td>
                    <td>{{ $project->$desc }}</td>
                    <td>
                        @foreach($project->images as $image)
                            <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $project->title_en }}" width="100">
                        @endforeach
                    </td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->delivery_date }}</td>
                    <td>{{ $project->delivery_duration }} days</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', [$service, $project]) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.projects.destroy', [$service, $project]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        {{-- <a href="{{ route('admin.projects.images.add', $project->id) }}" class="btn btn-success">Add Images</a> --}}
                        <a href="{{ route('admin.projects.images.edit', $project->id) }}" class="btn btn-info">add/edit Images</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">No projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
