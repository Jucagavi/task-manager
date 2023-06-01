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
{{ Auth::user()->role }}
<?php $visibleboton=false; ?>
@if(Auth::user()->role=='admin')
    <?php $visibleboton=true; ?>
@endif

<br><br>

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
                <input type="button" value="Edit"></a>
            @endif
        </td>
            <form method="POST" action="{{ route('user.destroy', $user->id) }}">
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
<a href="{{ route('user.create') }}"><input type="button" value="Create new User"></a>
<a href="{{ url('/home') }}"><input type="button" value="Back"/></a>

@endsection         