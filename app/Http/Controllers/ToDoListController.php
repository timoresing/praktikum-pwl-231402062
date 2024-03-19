<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function home()
    {
        $tasks = [
            [
                'task'    => 'Task1',
                'tanggal' => '2022-03-21',
            ],
            [
                'task'    => 'Task2',
                'tanggal' => '2022-03-22',
            ]
        ];

        return view('home', [
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request)
    {
        $tasks = [
            [
                'task'    => 'Task1',
                'tanggal' => '2022-03-21',
            ],
            [
                'task'    => 'Task2',
                'tanggal' => '2022-03-22',
            ],
        ];

        $tasks[] = [
            'task'    => $request->task,
            'tanggal' => '2024-03-14',
        ];

        return view('home', [
            'tasks' => $tasks,
        ]);
    }
}