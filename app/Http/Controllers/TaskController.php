<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index() {
        $tasks=Task::all();
        return view('task.index', compact('tasks'));
    }

    public function create(Project $project) {
        $users=User::all();
        return view('task.create', compact('project', 'users'));
    }

    public function store (Request $request) {
        $task = new Task();
        $task->name = $request->name;
        $task->state = $request->state;
        $task->user_id = $request->user_id;
        $task->project_id = $request->project_id;
        $task->save();

        session()->flash('success', 'Tarea asignada correctamente.');
        return redirect()->route('projects.index');
    }

    public function edit (Task $task, Project $project) {
        $users=User::all();
        return view('task.edit', compact('task', 'project', 'users'));
    }

    public function update (Request $request, Task $task) {
        $task->update($request->all());
        session()->flash('success', 'Tarea actualizada correctamente.');
        return redirect()->route('projects.index');
    }

    // public function show (Task $task) {
    //     return view('task.show', compact('task'));
    // }

    public function destroy (Task $task) {
        $task->delete();
        session()->flash('success', 'Tarea borrada correctamente.');
        return redirect()->route('projects.index');
    }

}
