<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class TaskController extends Controller
{

    public function index(Request $request): Response
    {
        return Inertia::render('Tasks/Index', [
            'tasks' => [
                [
                    'id' => 1,
                    'title' => 'Task 1',
                    'description' => 'Description for Task 1',
                    'completed' => false,
                    'category' => null,
                    'assignee' => [
                        'id' => 1,
                        'name' => 'Jonathan Reinink',
                        'email' => 'jonathan.reinink@yopmail.com',
                    ],
                    'created_at' => '2024-10-04T03:34:58.000000Z',
                    'updated_at' => '2024-10-04T03:34:58.000000Z',
                ],
                [
                    'id' => 2,
                    'title' => 'Task 2',
                    'description' => 'Description for Task 2',
                    'completed' => false,
                    'category' => null,
                    'assignee' => [
                        'id' => 2,
                        'name' => 'Victor Viet Le',
                        'email' => 'viet.le@yopmail.com'
                    ],
                    'created_at' => '2024-10-04T03:34:58.000000Z',
                    'updated_at' => '2024-10-04T03:34:58.000000Z',
                ]
            ]
        ]);
    }

}
