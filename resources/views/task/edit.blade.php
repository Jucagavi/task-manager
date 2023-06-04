@extends('layouts.app')

@section ('content')

    <form method="POST" action="{{ route ('task.update', $task->id) }}">
        @method('PUT')
        @csrf
        <table>
            <tr>
                <td>Task name:</td>
                <td><input type="text" name="name" value="{{ $task->name }}" required="required"/></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>
                    <select name="state" required="required">
                    <option value="{{ $task->state }}">{{ $task->state }}</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En progreso">En progreso</option>
                    <option value="Finalizado">Finalizado</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Project:</td>
                <td> 
                    <select name="project_id" required="required">
                        <option value="{{ $task->project_id }}">{{ $task->project->name }}</option>
                        @foreach ($projects as $project)
                            <option value="{{ $project->id }}">{{ $project->name }}</option>    
                        @endforeach                        
                    </select>
                </td>
                {{-- <td><input type="text" name="project_id" value="{{ $task->project_id}}"/></td> --}}
            </tr>
            <tr>
                <td>User Id:</td>
                <td>
                    <select name="user_id" required="required">
                            <option value="">-- Eliga usuario --</option>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>    
                            @endforeach                        
                    </select>
                    </td>
                {{-- <td><input type="text" name="user_id" value="{{ $task->user_id}}"/></td> --}}
            </tr>
        </table>
        <br>
        <input type="submit" value="Update" class="btn btn-primary"/>
    </form>
    <br>
    <a href="{{ route('task.index') }}"><input type="button" value="Back" class="btn btn-primary"/></a>
@endsection


    {{-- @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}

    {{-- @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}