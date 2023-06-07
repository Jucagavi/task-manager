@extends('layouts.app')

    @section('cabecera')
    @endsection
    
    @section('content')
    <h2>Login</h2>
    {{-- <div class="container"> --}}
    <form method="POST" action="{{ route('init-session')}}">
        @csrf
        <div class="mb-3 row"> 
            <label for="email" class="col-sm-3 col-form-label">Email:</label>
            <div class="col-sm-4">
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
        </div>
        <div class="mb-3 row"> 
            <label for="password" class="col-sm-3 col-form-label">Password:</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <div class="mb-3 row">
            {{-- <p>¿No tienes cuenta? <a href="{{ route('register') }}">Register</a></p> --}}
            <div class="offset-sm-3 col-sm-4">
                <button  type="submit" class="btn btn-primary">Enter</button>
            </div>
        </div>
    </form>
    {{-- </div> --}}
    @endsection