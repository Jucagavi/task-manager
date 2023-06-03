@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    @section('cabecera')
    @endsection
    
    @section('content')
    <h2>Login</h2>
    <form method="POST" action="{{ route('init-session')}}">
        @csrf
        {{-- <div class="form-group">  --}}
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        {{-- </div> --}}
        <div class="form-group"> 
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        </div>
        <br><br>
        {{-- <p>¿No tienes cuenta? <a href="{{ route('register') }}">Register</a></p> --}}
        <button class="btn btn-primary" type="submit">Enter</button>
    </form>
    @endsection
</body>
</html>