@extends('layouts.app')

@section ('cabecera')
    
@endsection


@section('content')

    <h4>Proyecto: {{ $project->name }} </h4>
    <br>
    <form method="POST" action="{{ route('task.store') }}">    
        @csrf

        <div class="form-group mb-3">
            <label for="name">Task name:</label>
            <input type="text" class="form-control" name="name" id="name" required="required" placeholder="Enter name">
        </div>
        <div class="form-group mb-3">
            <select class="form-select" aria-label="Default select example" name="state" required="required">
                <option value="">-- Estado --</option>
                <option value="Pendiente">Pendiente</option>
                <option value="En progreso">En progreso</option>
                <option value="Finalizado">Finalizado</option>
            </select>
        </div>      

        <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">
    
        <input hidden type="text" name="project_id" value="{{ $project->id }}"/>         
            
        <br>
        <input type="submit" value = "Save" class="btn btn-primary"/>
    </form>
    <br>
    <a href="{{ route('projects.index') }}"><input type="button" class="btn btn-primary" value="Back"/></a>
@endsection