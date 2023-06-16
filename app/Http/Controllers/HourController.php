<?php

namespace App\Http\Controllers;

use App\Models\Hour;
use Illuminate\Http\Request;

class HourController extends Controller
{
    public function create() {
        return view('hour.create');
    }

    public function store (Request $request) {
        Hour::create($request->all());
        session()->flash('success', 'Horas asignadas correctamente.');
        return redirect()->route('task.index');
    }
}
