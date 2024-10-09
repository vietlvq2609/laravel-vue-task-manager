<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        $projects = Project::with('owner')->get();
        return Inertia::render('Projects/Index', [
            'projects' => $projects
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Projects/Create');
    }
    public function edit(Request $request): Response
    {
        $project = Project::with('owner')->findOrFail($request->route('id'));
        return Inertia::render('Projects/Edit', [
            'project' => $project
        ]);
    }
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'code' => ['required', 'string', 'min:4', 'max:15', 'unique:projects'],
            'name' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
        ]);

        $project = Project::create([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'owner_id' => auth()->id(),
        ]);

        return to_route('projects.edit', [
            'id' => $project->id
        ]);
    }
}
