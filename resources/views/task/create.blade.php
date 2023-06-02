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
                    <input type=text name="name" required="required"/>
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
                </td>
            </tr>
            <tr>
                <td>User: </td>
                <td>
                <select name="user_id" required="required">
                        <option value="">-- Eliga usuario --</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>    
                        @endforeach                        
                </select>
                </td>
            <tr>
                <td>Project: </td>
                <td> 
                    <select name="project_id" required="required">
                        <option value="">-- Eliga proyecto --</option>
                        @foreach ($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->name }}</option>    
                        @endforeach                        
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value = "Create" />
    </form>
    <a href="{{ route('task.index') }}"><input type="button" value="Back"/></a>
@endsection