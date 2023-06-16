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
            {{-- <a href="{{ route ('task.edit', $task->id) }}"> --}}
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
{{-- <a href="{{ route('task.create') }}"><input type="button" class="btn btn-primary" value="Create new Task"></a> --}}
<a href="{{ route('projects.index') }}" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
</a>
@endsection         