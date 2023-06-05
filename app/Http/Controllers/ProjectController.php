<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index() {
        $projects=Project::all();
        return view('project.index', compact('projects'));
    }

    public function create() {
        return view('project.create');
    }

    public function store (Request $request) {
        $project = new Project();
        $project->name = $request->name;
        $project->state = $request->state;
        $project->save();

        return redirect()->route('project.index');
    }

    public function edit (Project $project) {
        return view('project.edit', compact('project'));
    }

    public function update (Request $request, Project $project) {
        $project->update($request->all());
        return redirect()->route('project.index');
    }

    // public function show (Project $project) {
    //     return view('project.show', compact('project'));
    // }

    // vista show de pruebas
    public function show(Int $id) {
        $projects = Project::all();
        $tasks = Task::all();
        $user = User::find($id);
        return view('project.show', compact('projects', 'tasks', 'user'));
    }

    public function destroy (Project $project) {
        $tasks = Task::all();
        foreach ($project->tasks as $task) {
            if ($task->state!="Pendiente"){ 
                return redirect()->route('project.index');
            }
        }
        $project->delete();
        return redirect()->route('project.index');
    }
}
