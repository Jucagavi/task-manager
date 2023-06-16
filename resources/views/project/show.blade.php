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
    <h4>Tareas del proyecto: {{ $project->name }}</h4>
    <a href="{{ route('task.create', $project) }}"><input type="button" class="btn btn-primary" value="Add new Task"></a>
    
    <a href="{{ route('projects.index') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
    </a>
    <br>
    <?php
        $confirm=false;
    ?>
    
    <br>
    @foreach ($project->tasks as $task)
       <?php
            $confirm=true;
        ?>
    @endforeach
    @if ($confirm)
    <table>    
        <thead>
        <tr>
            <th>Name</th><th>Status</th><th>Started at</th><th>Hours worked</th><th></th><th></th><th></th>
        </tr>
        </thead>
        @foreach ($project->tasks as $task)
            {{-- echo "Proyecto: ".$project->id." ".$project->name."<br>"; --}}
            <tr>
                <td>
                    {{ $task->name }}
                </td>
                <td>
                    {{ $task->state }}
                </td>
                <td>
                    {{ $task->started_at }}
                </td>
                <td>
                    {{ 100 }}
                </td>
                <td>
                    <a href="{{ route ('hour.create', $task->id) }}">
                    <input type="button" value="Add hours" class="btn btn-secondary"></a>
                </td>
                <td>
                    <a href="{{ route ('task.edit', [$task->id, $project]) }}">
                    <input type="button" value="Edit" class="btn btn-secondary"></a>
                </td>
                <form method="POST" action="{{ route('task.destroy', $task->id) }}">
                    @csrf
                    @method('DELETE')
                    <td>
                        <input type="submit" value="Delete" class="btn btn-danger" />
                    </td>
                </form>
            </tr>
        @endforeach
    </table>            
    <br>    
    @else
        <div class="alert alert-info text-center pt50 pb50">
            No existen tareas en este proyecto.
        </div>
    @endif
    
@endsection
