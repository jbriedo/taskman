<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index')->with('tasks', $tasks);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'taskToDo' => 'required',
            'toDoBy' => 'required|date'
        ]);

        $task = new Task([
            'taskToDo' => $request->get('taskToDo'),
            'toDoBy' => $request->get('toDoBy'),
        ]);

        $task->save();
        return redirect('/tasks')->with('success', 'Task created successfully.');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
