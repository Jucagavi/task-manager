@extends('layouts.app')
<style>
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

@include('alerts.alerts')

{{-- <?php $visibleboton=false; ?> --}}

<h4>Proyectos</h4>
@if(Auth::user()->role=='admin')
    <br>
    <table>    
    <thead>
    <tr>
        <th>Id</th><th>Name Project</th><th>State Project</th><th></th><th></th>
    </tr>
    </thead>
    @forelse($projects as $project)
        <tr>
            <td>
            {{ $project->id }}
            </td>
            <td>
            <a href="{{ route ('project.show', $project->id)}}">{{ $project->name }}</a>
            </td>
            <td>
            {{ $project->state }}
            </td>
            <td> 
            <a href="{{ route ('project.edit', $project->id) }}">
            <input type="button" value="Edit" class="btn btn-secondary"></a>
            </td>
            <form method="POST" action="{{ route('project.destroy', $project->id) }}">
                @csrf
                @method('DELETE')
                <td>
                    <input type="submit" value="Delete" class="btn btn-danger"/>
                </td>
            </form>
        </tr>
    @empty
        <p>No data.</p>    
    @endforelse
    </table>
    <a href="{{ route('project.create') }}"><input type="button" class="btn btn-primary" value="Create new Project"></a>
    {{-- <a href="{{ url('/home') }}"><input type="button" value="Back" class="btn btn-primary"/></a> --}}
@else
    <?php
        $user=Auth::user();
        // echo "Usuario: ".$user->name."<br>";
    ?>
    <br>
    <table>    
        <thead>
        <tr>
            <th>Id</th><th>Name Project</th><th>Status</th><th></th>
        </tr>
        </thead>
        @foreach ($projects as $project)
            @foreach ($project->tasks as $task)
                @if ($task->user_id==$user->id)
                    <tr>
                        <td>
                        {{ $project->id }}
                        </td>
                        <td>
                        {{ $project->name }}
                        </td>
                        <td>
                        {{ $project->state }}
                        </td>
                    </tr>
                {{-- break;             --}}
                @endif
            @endforeach
        @endforeach
    </table>            
    {{-- <?php redirect()->route('project.show'); ?> --}}
    {{-- <a href="{{ url('/home') }}"><input type="button" value="Back" class="btn btn-primary"/></a> --}}
@endif

@endsection