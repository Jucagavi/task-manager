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
    
    <h4>Tareas del proyecto: {{ $project->name }}</h4>
    <?php
        $user=Auth::user();
        echo "Usuario: ".$user->name."<br>";
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
            <th>Name</th><th>Status</th><th>Started at</th><th>Hours worked</th><th></th><th></th>
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
        {{-- session()->flash('failure', 'No existen tareas en este proyecto.'); --}}
        @include('alerts.alerts')
    @endif
    <a href="{{ route('task.create', $project) }}"><input type="button" class="btn btn-primary" value="Add new Task"></a>
    <a href="{{ route('projects.index') }}"><input type="button" value="Back" class="btn btn-primary"/></a>
@endsection
