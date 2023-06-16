@extends('layouts.app')

<style>
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

@include('alerts.alerts')

<h4>Users</h4>

<a href="{{ route('user.create') }}"><input type="button" class="btn btn-primary" value="Create new User"></a>
<a href="{{ route('projects.index') }}" class="btn btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
    </svg>
</a>
<br><br>

<?php $visibleboton=false; ?>
@if(Auth::user()->role=='admin')
    <?php $visibleboton=true; ?>
@endif

<table>    
    <thead>
    <tr>
        <th>Id</th><th>Name</th><th>Email</th><th>Role</th><th></th><th></th>
    </tr>
    </thead>
    @forelse($users as $user)
        <tr>
            <td>
            {{ $user->id }}
            </td>
            <td>
            {{ $user->name }}
            </td>
            <td>
            {{ $user->email }}
            </td>
            <td>
            {{ $user->role }}
            </td>
            <td> 
            <a href="{{ route ('user.edit', $user->id) }}">
            @if ($visibleboton)
                <input type="button" value="Edit" class="btn btn-secondary"></a>
            @endif
            </td>
            <form method="POST" action="{{ route('user.destroy', $user->id) }}">
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

@endsection         