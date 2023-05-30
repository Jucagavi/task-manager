<?php

namespace App\Http\Controllers;

use App\Models\Project;
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

    public function destroy (Project $project) {
        $project->delete();
        return redirect()->route('project.index');
    }
}