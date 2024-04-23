<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('home', [
            'tasks' => $tasks,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'task' => 'required|min:5',
            ],
            [
                'task.required' => 'Tugas harus diisi',
                'task.min'      => 'Tugas minimal 5 karakter',
            ]
        );

        Task::create([
            'task'    => $request->task,
            'tanggal' => NOW(),
        ]);

        return redirect('/');
    }

    public function deleteTask(Request $request)
    {
        Task::where('id', $request->id)->delete();

        return redirect('/');
    }

    public function editTask(Request $request)
    {
        $task = Task::find($request->id);

        return view('edit',[
            'task' => $task
        ]);
    }

    public function updateTask(Request $request)
    {
        $validation = $request->validate([
            'task' => 'required|min:5',
        ]);

        Task::where('id', $request->id)->update([
            'task' => $validation['task']
        ]);

        return redirect('/');
    }

    public function detailTask(Request $request)
    {
        $task = Task::find($request->id);

        return view('detail',[
            'task' => $task
        ]);
    }

    public function showTask()
    {
        return redirect('/');
    }
}
