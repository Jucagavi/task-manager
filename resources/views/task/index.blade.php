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
        border-collapse: collapse;
        color: black;
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
{{-- {{ Auth::user()->role }} --}}
<?php $visibleboton=false; ?>
@if(Auth::user()->role=='admin')
    <?php $visibleboton=true; ?>
@endif

<br><br>

<table>    
    <thead>
    <tr>
        <th>Name Task</th><th>Status</th><th>Project Id</th><th>User Id</th><th></th><th></th>
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
                <input type="button" value="Edit" class="btn btn-secondary"></a>
            @endif
        </td>
            <form method="POST" action="{{ route('task.destroy', $task->id) }}">
                @csrf
                @method('DELETE')
                <td>
                @if ($visibleboton)
                    <input type="submit" value="Delete" class="btn btn-danger" />
                @endif
                </td>
            </form>
    </tr>
    @empty
        <p>No data.</p>    
    @endforelse
</table>
<a href="{{ route('task.create') }}"><input type="button" class="btn btn-primary" value="Create new Task"></a>
<a href="{{ url('/home') }}"><input type="button" value="Back" class="btn btn-primary"/></a>

@endsection         