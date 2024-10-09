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
        return Inertia::render('Projects/Index', [
            'projects' => [
                [
                    'id' => 'PROJECT-1',
                    'title' => 'Project 1',
                    'description' => 'Description for Project 1',
                    'owner' => [
                        'id' => 1,
                        'name' => 'Jonathan Reinink',
                    ]
                ],
                [
                    'id' => 'PROJECT-2',
                    'title' => 'Project 2',
                    'description' => 'Description for Project 2',
                    'owner' => [
                        'id' => 1,
                        'name' => 'Jonathan Reinink',
                    ]
                ]
            ]
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Projects/Create');
    }
    public function edit(Request $request): Response
    {
        return Inertia::render('Projects/Edit', [
            'project' => [
                'id' => 'PROJECT-2',
                'title' => 'Project 2',
                'description' => 'Description for Project 2',
                'owner' => [
                    'id' => 1,
                    'name' => 'Jonathan Reinink',
                ]
            ],
        ]);
    }
    public function store(Request $request): RedirectResponse
    {
        $project = Project::create($request->validate([
            'name' => ['required', 'max:100'],
            'description' => ['nullable'],
        ]));

        return to_route('projects.edit', ['project' => $project]);
    }
}
