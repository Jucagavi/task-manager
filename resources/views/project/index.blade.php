@extends('layouts.app')
<style>
    /* body {
        background-color: #632432;
        font-family: Arial;
    } */
    table {
        width: 100%;
        text-align: left;
        background-color: white;
        color: black;   
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

<?php $visibleboton=false; ?>
{{ Auth::user()->role }}
<?php $visibleboton=false; ?>
@if(Auth::user()->role=='admin')
    <?php $visibleboton=true; ?>
@endif

<br><br>

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
            @if ($visibleboton)
                <input type="button" value="Edit" class="btn btn-secondary"></a>
            @endif
        </td>
            <form method="POST" action="{{ route('project.destroy', $project->id) }}">
                @csrf
                @method('DELETE')
                <td>
                @if ($visibleboton)
                    <input type="submit" value="Delete" class="btn btn-danger"/>
                @endif
                </td>
            </form>
    </tr>
    @empty
        <p>No data.</p>    
    @endforelse
</table>
<a href="{{ route('project.create') }}"><input type="button" class="btn btn-primary" value="Create new Project"></a>
<a href="{{ url('/home') }}"><input type="button" value="Back" class="btn btn-primary"/></a>


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