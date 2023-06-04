@extends('layouts.app')

@section ('cabecera')
    
@endsection


@section('content')
    
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <table>
            <tr>
                <td>User name: </td>
                <td><input type=text name="name" /></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type=text name="email" /></td>
            </tr>
            <tr>
                <td>Role: </td>
                <td>
                <select name="state" required="required">
                    <option value="">-- Elija role --</option>
                    <option value="admin">Admin</option>
                    <option value="worker">Worker</option>
                </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value = "Create" class="btn btn-primary"/>
    </form>
    <br>
    <a href="{{ route('user.index') }}"><input type="button" class="btn btn-primary" value="Back"/></a>
@endsection