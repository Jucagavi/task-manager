@extends('layouts.app')

@section ('content')

    
<form method="POST" action="{{ route ('project.update', $project->id) }}">
    @method('PUT')
    @csrf
    <table>
        <tr>
            <td>Project name:</td>
            <td><input type="text" name="name" value="{{ $project->name }}" required="required"/></td>
        </tr>
        <tr>
            <td>Status:</td>
            <td><input type="text" name="state" value="{{ $project->state }}"/></td>
        </tr>
        <tr><td><input type="submit" value="Update" /></td></tr>
    </table>
</form>
<a href="{{ route('project.index') }}"><input type="button" value="Back"/></a>
@endsection