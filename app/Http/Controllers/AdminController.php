<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function indexServices()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function createService()
    {
        return view('admin.services.create');
    }

    public function storeService(Request $request)
    {
        $request->validate([
            'title_en' => 'required',
            'desc_en' => 'required',
            'title_ar' => 'required',
            'desc_ar' => 'required',
            'image' => 'required|image',
            'banner' => 'required|image'
        ]);

        $imagePath = $request->file('image')->store('services', 'public');
        $bannerPath = $request->file('banner')->store('services', 'public');

        Service::create([
            'title_en' => $request->title_en,
            'desc_en' => $request->desc_en,
            'title_ar' => $request->title_ar,
            'desc_ar' => $request->desc_ar,
            'image' => $imagePath,
            'banner' => $bannerPath
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service created successfully.');
    }

    public function editService(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function updateService(Request $request, Service $service)
    {
        $request->validate([
            'title_en' => 'required',
            'desc_en' => 'required',
            'title_ar' => 'required',
            'desc_ar' => 'required',
            'image' => 'nullable|image',
            'banner' => 'nullable|image'
        ]);

        $data = $request->only('title_en', 'desc_en', 'title_ar', 'desc_ar');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $data['image'] = $imagePath;
        }

        if ($request->hasFile('banner')) {
            $bannerPath = $request->file('banner')->store('services', 'public');
            $data['banner'] = $bannerPath;
        }

        $service->update($data);

        return redirect()->route('admin.services.index')->with('success', 'Service updated successfully.');
    }

    public function destroyService(Service $service)
    {
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service deleted successfully.');
    }

    // Projects methods
    public function indexProjects(Service $service)
    {
        $projects = $service->projects()->get();
        
        return view('admin.projects.index', compact('service', 'projects'));
    }

    public function createProject(Service $service)
    {
        return view('admin.projects.create', compact('service'));
    }

    public function storeProject(Request $request, Service $service)
    {
        $request->validate([
            'title_en' => 'required',
            'desc_en' => 'required',
            'title_ar' => 'required',
            'desc_ar' => 'required',
            'image' => 'required|image',
            'client' => 'required',
            'delivery_date' => 'required|date',
            'delivery_duration' => 'required|integer',
        ]);

        $imagePath = $request->file('image')->store('projects', 'public');

        $service->projects()->create([
            'title_en' => $request->title_en,
            'desc_en' => $request->desc_en,
            'title_ar' => $request->title_ar,
            'desc_ar' => $request->desc_ar,
            'image' => $imagePath,
            'client' => $request->client,
            'delivery_date' => $request->delivery_date,
            'delivery_duration' => $request->delivery_duration,
        ]);

        return redirect()->route('admin.projects.index', $service)->with('success', 'Project created successfully.');
    }

    public function editProject(Service $service, Project $project)
    {
        return view('admin.projects.edit', compact('service', 'project'));
    }

    public function updateProject(Request $request, Service $service, Project $project)
    {
        $request->validate([
            'title_en' => 'required',
            'desc_en' => 'required',
            'title_ar' => 'required',
            'desc_ar' => 'required',
            'image' => 'nullable|image',
            'client' => 'required',
            'delivery_date' => 'required|date',
            'delivery_duration' => 'required|integer',
        ]);

        $data = $request->only('title_en', 'desc_en', 'title_ar', 'desc_ar', 'client', 'delivery_date', 'delivery_duration');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
            $data['image'] = $imagePath;
        }

        $project->update($data);

        return redirect()->route('admin.projects.index', $service)->with('success', 'Project updated successfully.');
    }

    public function destroyProject(Service $service, Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index', $service)->with('success', 'Project deleted successfully.');
    }

    public function addImages(Request $request, Project $project)
    {
        $request->validate([
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('project_images', 'public');
                ProjectImage::create([
                    'project_id' => $project->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Images added successfully.');
    }

    public function editImages(Project $project)
    {
        $images = $project->images;
        return view('admin.projects.edit_images', compact('project', 'images'));
    }

    public function deleteImage(Project $project, ProjectImage $image)
    {
        $image->delete();
        return redirect()->back()->with('success', 'Image deleted successfully.');
    }
}
