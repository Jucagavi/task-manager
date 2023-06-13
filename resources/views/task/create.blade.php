@extends('layouts.app')

@section ('cabecera')
    
@endsection


@section('content')
    <h4>Proyecto: {{ $project->name }} </h4>
    <br>
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
                <input hidden type=text name="project_id" value="{{ $project->id }}"/>         
            </tr>
        </table>
        <br>
        <input type="submit" value = "Create" class="btn btn-primary"/>
    </form>
    <br>
    <a href="{{ route('projects.index') }}"><input type="button" class="btn btn-primary" value="Back"/></a>
@endsection