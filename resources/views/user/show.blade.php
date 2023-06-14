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
    <a href="{{ route('projects.index') }}"><input type="button" value="Back" class="btn btn-primary"/></a>
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
