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
        return redirect('/tasks')->with('success', 'Task created.');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit')->with('task', $task);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'taskToDo' => 'required',
            'toDoBy' => 'required|date'
        ]);

        $task = Task::find($id);

        $task->taskToDo = $request->get('taskToDo');
        $task->toDoBy = $request->get('toDoBy');
        $task->isDone = !is_null($request->get('isDone'))? true : false;

        $task->save();
        return redirect('/tasks')->with('success', 'Task updated.');
    }

    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('/tasks')->with('success', 'Task deleted.');
    }
}
