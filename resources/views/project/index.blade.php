@extends('layouts.app')
<style>
    body {
        background-color: #632432;
        font-family: Arial;
    }
    table {
        width: 100%;
        text-align: left;
        background-color: white;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
    }
    thead {
        background-color: #246355;
        border-bottom: solid 5px #0F362D;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #ddd;
    }

</style>

@section('cabecera')
    
@endsection

@section('content')

<br><br>
$user=Auth::user();
echo $user;
<table>    
    <thead>
    <tr>
        <th>Name Project</th><th>State Project</th><th></th><th></th>
    </tr>
    </thead>
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
<a href="{{ route('project.create') }}"><input type="button" value="Create new project"></a>
<a href="{{ url('/') }}"><input type="button" value="Back"/></a>


{{-- $user=Auth::user();
    if(!Empty($user)) {
        if($user->role_id==1) {
            return view('administrador');
        } else {
            return view('worker');
        }
    } else {
        return view('welcome');
    } --}}
@endsection