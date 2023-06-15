@extends('layouts.app')

@section ('cabecera')
    
@endsection

{{-- <style>
    body {
        background-color: #632432;
    }
</style> --}}
@section('content')
    <form method="POST" action="{{ route('project.store') }}">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Project name:</label>
            <input type="text" class="form-control" name="name" id="name" required="required" placeholder="Enter name">
        </div>
        <div class="form-group mb-3">
            <label for="state">Status:</label>
            <input type="text" class="form-control" name="state" id="state" required="required" placeholder="Enter status">
        </div>
        <br>
        <input type="submit" value = "Save" class="btn btn-primary"/>
    </form>
    <br>
    <a href="{{ route ('projects.index')}}"><input type="button" value="Back" class="btn btn-primary"></a>
@endsection