@extends('layouts.app')

@section ('cabecera')
    
@endsection


@section('content')
    
    <form method="POST" action="{{ route('task.store') }}">
        @csrf
        <table>
            <tr>
                <td>Task name: </td>
                <td>
                    <input type=text name="name" />
                    {{-- @error('title')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror --}}
                </td>
            </tr>

            <tr>
                <td>Status:</td>
                <td> 
                    <select name="state" required="required">
                        <option value="">-- Eliga estado --</option>
                        <option value="Pendiente">Pendiente</option>
                        <option value="En progreso">En progreso</option>
                        <option value="Finalizado">Finalizado</option>
                    </select>
                    {{-- <input type=text name="state" /> --}}
                </td>
            </tr>
            <tr>
                <td>User Id: </td>
                <td><input type="text" name="user_id"/></td>
            <tr>
                <td>Project Id: </td>
                <td><input type="text" name="project_id"/></td>
            </tr>
        </table>
        <input type="submit" value = "Create" />
    </form>
    <a href="{{ route('task.index') }}"><input type="button" value="Back"/></a>
@endsection