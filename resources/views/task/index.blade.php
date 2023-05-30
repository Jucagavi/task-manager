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

<?php $visibleboton=false; ?>

<br><br>

<table>    
    <thead>
    <tr>
        <th>Name Task</th><th>State Task</th><th>Project Id</th><th>User Id</th><th></th><th></th>
    </tr>
    </thead>
    @forelse($tasks as $task)
    
    <tr>
        <td>
            {{ $task->name }}
        </td>
        <td>
            {{ $task->state }}
        </td>
        <td>
            {{ $task->project_id }}
        </td>
        <td>
            {{ $task->user_id }}
        </td>
        <td> 
            <a href="{{ route ('task.edit', $task->id) }}">
            @if ($visibleboton)
                <input type="button" value="Edit"></a>
            @endif
        </td>
            <form method="POST" action="{{ route('task.destroy', $task->id) }}">
                @csrf
                @method('DELETE')
                <td>
                @if ($visibleboton)
                    <input type="submit" value="Delete" />
                @endif
                </td>
            </form>
    </tr>
    @empty
        <p>No data.</p>    
    @endforelse
</table>
<a href="{{ route('task.create') }}"><input type="button" value="Create new task"></a>
<a href="{{ url('/') }}"><input type="button" value="Back"/></a>

@endsection         