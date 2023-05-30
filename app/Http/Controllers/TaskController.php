<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index() {
        $tasks=Task::all();
        return view('task.index', compact('tasks'));
    }

    public function create() {
        return view('task.create');
    }

    public function store (Request $request) {
        $task = new Task();
        $task->name = $request->name;
        $task->state = $request->state;
        $task->user_id = $request->user_id;
        $task->project_id = $request->project_id;
        $task->save();

        return redirect()->route('task.index');
    }

    public function edit (Task $task) {
        return view('task.edit', compact('task'));
    }

    public function update (Request $request, Task $task) {
        $task->update($request->all());
        return redirect()->route('task.index');
    }

    // public function show (Task $task) {
    //     return view('task.show', compact('task'));
    // }

    public function destroy (Task $task) {
        $task->delete();
        return redirect()->route('task.index');
    }


}