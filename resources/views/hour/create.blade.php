@extends('layouts.app')

@section ('cabecera')
    
@endsection


@section('content')

    <h4>Task: {{ $task->name }} </h4>
    <br>
    <form method="POST" action="{{ route('hour.store') }}">    
        @csrf

        <div class="form-group mb-3">
            <label for="entry_hours">Hours:</label>
            <input type="text" class="form-control" name="entry_hours" id="entry_hours" required="required" placeholder="Enter hours">
        </div>
        <div class="form-group mb-3">
            <label for="description">Description:</label>
            <input type="text" class="form-control" name="description" id="description" required="required">
        </div>
    
        <input hidden type="text" name="task_id" value="{{ $task->id }}"/>         
        
        <input hidden type="text" name="user_id" value="{{ Auth::user()->id }}">

        <br>
        <input type="submit" value = "Save" class="btn btn-primary"/>
    </form>
    <br>
    <a href="{{ route('projects.index') }}"><input type="button" class="btn btn-primary" value="Back"/></a>
@endsection