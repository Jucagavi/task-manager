@extends('layouts.app')

@section ('content')

    <form method="POST" action="{{ route ('task.update', $task->id) }}">
        @method('PUT')
        @csrf
        <table>
            <tr>
                <td>Task name:</td>
                <td><input type="text" name="name" value="{{ $task->name }}"/></td>
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
                </td>
                {{-- <td><input type="text" name="state" value="{{ $task->state }}"/></td> --}}
            </tr>
            <tr>
                <td>Project Id:</td>
                <td><input type="text" name="project_id" value="{{ $task->project_id}}"/></td>
            </tr>
            <tr>
                <td>User Id:</td>
                <td><input type="text" name="user_id" value="{{ $task->user_id}}"/></td>
            </tr>
            <tr><td><input type="submit" value="Update" /></td></tr>
        </table>
    </form>
    <a href="{{ route('task.index') }}"><input type="button" value="Back"/></a>
@endsection


    {{-- @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}

    {{-- @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}