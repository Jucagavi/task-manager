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

    <h2>Tareas del proyecto: {{ $project->name }}</h2>
    <?php
        $user=Auth::user();
        echo "Usuario: ".$user->name."<br>";
    ?>
    
    <br>
    <table>    
        <thead>
        <tr>
            <th>Id</th><th>Name</th><th>Status</th><th>Started at</th><th></th><th></th>
        </tr>
        </thead>
        @foreach ($project->tasks as $task)
            {{-- echo "Proyecto: ".$project->id." ".$project->name."<br>"; --}}
            <tr>
                <td>
                    {{ $task->id }}
                </td>
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
                    <a href="{{ route ('task.edit', $task->id) }}">
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
    <a href="{{ route('task.create') }}"><input type="button" class="btn btn-primary" value="Create new Task"></a>
    <a href="{{ route('project.index') }}"><input type="button" value="Back" class="btn btn-primary"/></a>
@endsection
