<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
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

        session()->flash('success', 'Proyeto creado correctamente.');
        return redirect()->route('project.index');
    }

    public function edit (Project $project) {
        return view('project.edit', compact('project'));
    }

    public function update (Request $request, Project $project) {
        $project->update($request->all());
        session()->flash('success', 'Proyecto actualizado correctamente.');
        return redirect()->route('project.index');
    }

    // public function show (Project $project) {
    //     return view('project.show', compact('project'));
    // }

    // vista show de pruebas
    public function show(Int $id) {
        $project = Project::find($id);
        $tasks = Task::all();
        // $user = User::find($id);
        return view('project.show', compact('project', 'tasks'));
    }

    public function destroy (Project $project) {
        $tasks = Task::all();
        foreach ($project->tasks as $task) {
            if ($task->state!="Pendiente"){ 
                session()->flash('failure', 'No se puede eliminar porque tiene tareas en estado distinto de pendiente.');
                return redirect()->route('project.index');
            }
        }
        $project->delete();
        session()->flash('success', 'Proyecto borrado correctamente.');
        return redirect()->route('project.index');
    }
}
