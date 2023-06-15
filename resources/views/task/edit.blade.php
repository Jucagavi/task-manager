@extends('layouts.app')

@section ('content')
    <h4>Proyecto: {{ $project->name }} </h4>
    <br>
    <form method="POST" action="{{ route ('task.update', $task->id) }}">
        @method('PUT')
        @csrf
        
        <div class="form-group mb-3">
            <label for="name">Task name:</label>
            <input type="text" class="form-control" value="{{ $task->name }}" name="name" id="name" required="required" placeholder="Enter name">
        </div>
        <div class="form-group mb-3">
            <select class="form-select" aria-label="Default select example" name="state" required="required">
                <option value="{{ $task->state }}">{{ $task->state }}</option>
                <option value="Pendiente">Pendiente</option>
                <option value="En progreso">En progreso</option>
                <option value="Finalizado">Finalizado</option>
            </select>
        </div>        
        <br>
        <input type="submit" value="Update" class="btn btn-primary"/>
    </form>
    <br>
    <a href="{{ route('projects.index') }}"><input type="button" value="Back" class="btn btn-primary"/></a>
@endsection


    {{-- @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}

    {{-- @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}