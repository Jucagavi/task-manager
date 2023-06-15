@extends('layouts.app')

@section ('content')

    
<form method="POST" action="{{ route ('project.update', $project->id) }}">
    @method('PUT')
    @csrf
    <div class="form-group mb-3">
        <label for="name">Project name:</label>
        <input type="text" class="form-control" value="{{ $project->name }}" name="name" id="name" required="required">
    </div>
    <div class="form-group mb-3">
        <label for="state">Status:</label>
        <input type="text" class="form-control" value="{{ $project->state }}" name="state" id="state" required="required">
    </div>
    <br>
    <input type="submit" value="Update" class="btn btn-primary" />
</form>
<br>
<a href="{{ route('projects.index') }}"><input type="button" value="Back" class="btn btn-primary"/></a>
@endsection