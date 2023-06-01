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
                <td><input type="text" name="role"/></td>
            </tr>
        </table>
        <input type="submit" value = "Create" />
    </form>
    <a href="{{ route('user.index') }}"><input type="button" value="Back"/></a>
@endsection