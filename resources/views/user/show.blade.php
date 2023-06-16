@extends('layouts.app')
<style>
    table {
        width: 40%;
        text-align: right   ;
        background-color: white;
        color: black;   
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
    }
</style>

@section('cabecera')
    
@endsection

@section ('content')
    <h4>Profile</h4>
    <a href="{{ route('projects.index') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
    </a>
    <br><br>
    <table>
        <tr>
            <td>Name: </td>
            <td>{{ $user->name }}</td>
       </tr>
        <tr>
            <td>Email: </td>
            <td>{{ $user->email }}</td>
        </tr>
        <tr>
            <td>Role: </td>
            <td>{{ $user->role }}</td>
        </tr>
    </table>
    
@endsection
