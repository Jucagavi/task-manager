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

{{-- <?php $visibleboton=false; ?> --}}

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid container">
        
        <a class="navbar-brand" href="#">Task Manager</a>
        <button class="navbar-toggler" type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#nav" >
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>  
      <div class="collapse navbar-collapse" id="nav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route ('user.index') }}">USERS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}">EXIT</a>
          </li>
        </ul>
    </div>
</nav>
<br>
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
        echo "Usuario: ".$user->name."<br>";
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