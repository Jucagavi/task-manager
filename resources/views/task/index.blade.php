@extends('layouts.app')
<style>
    table {
        width: 100%;
        background-color: #632432;
        border-collapse: collapse;
    }
    th, td {
        border: solid 1px black;
    }
</style>

@section('cabecera')
@endsection

@section('content')


<br><br>
<table>    
    
    <tr>
        <th>Name Project</th><th>State Project</th>
    </tr>
    @forelse($projects as $project)
    
    <tr>
        <td>
            {{-- <a href="{{ route ('note.show', $note->id)}}">{{ $note->title }}</a> --}}
            {{ $project->name }}
        </td>
        <td>
            {{-- <a href="{{ route ('note.show', $note->id)}}">{{ $note->description }}</a> --}}
            {{ $project->state }}
        </td>
        <td> 
            <a href="{{ route ('project.edit', $project->id) }}">
            <input type="button" value="Edit"></a>
        </td>
            <form method="POST" action="{{ route('project.destroy', $project->id) }}">
                @csrf
                @method('DELETE')
       @extends('layouts.app')
<style>
    table {
        width: 100%;
        background-color: #632432;
        border-collapse: collapse;
    }
    th, td {
        border: solid 1px black;
    }
</style>

@section('cabecera')
@endsection

@section('content')


<br><br>
<table>    
    
    <tr>
        <th>Name Project</th><th>State Project</th>
    </tr>
    @forelse($projects as $project)
    
    <tr>
        <td>
            {{-- <a href="{{ route ('note.show', $note->id)}}">{{ $note->title }}</a> --}}
            {{ $project->name }}
        </td>
        <td>
            {{-- <a href="{{ route ('note.show', $note->id)}}">{{ $note->description }}</a> --}}
            {{ $project->state }}
        </td>
        <td> 
            <a href="{{ route ('project.edit', $project->id) }}">
            <input type="button" value="Edit"></a>
        </td>
            <form method="POST" action="{{ route('project.destroy', $project->id) }}">
                @csrf
                @method('DELETE')
                <td>
                <input type="submit" value="Delete" />
                </td>
            </form>
    </tr>
    @empty
        <p>No data.</p>    
    @endforelse
</table>
<a href="{{ route('project.create') }}">Create new project.</a>

@endsection         <td>
                <input type="submit" value="Delete" />
                </td>
            </form>
    </tr>
    @empty
        <p>No data.</p>    
    @endforelse
</table>
<a href="{{ route('project.create') }}">Create new project.</a>

@endsection