@extends('layouts.app')

@section ('cabecera')
    
@endsection


@section('content')
    
    <form method="POST" action="{{ route('user.store') }}">
        @csrf
        
        <div class="form-group mb-3">
            <label for="name">User name:</label>
            <input type="text" class="form-control" name="name" id="name" required="required" placeholder="Enter name">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email" required="required" placeholder="Enter email">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required="required" placeholder="Enter password">
        </div>
        <div class="form-group mb-3">
            <select class="form-select" aria-label="Default select example" name="role" required="required">
                <option value="">-- Role --</option>
                <option value="admin">admin</option>
                <option value="worker">worker</option>
            </select>
        </div>
        <input type="submit" value = "Save" class="btn btn-primary"/>
    </form>  
    <br>
    <a href="{{ route('user.index') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
    </a>
@endsection        
        
        {{-- <table>
            <tr>
                <td>User name: </td>
                <td><input type=text name="name" /></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type=email name="email" /></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type=password name="password" required="required" /></td>
            </tr>
            <tr>
                <td>Role: </td>
                <td>
                <select name="role" required="required">
                    <option value="">-- Elija role --</option>
                    <option value="admin">Admin</option>
                    <option value="worker">Worker</option>
                </select>
                </td>
            </tr>
        </table>  --}}
