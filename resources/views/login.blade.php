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
        <label>Email:</label>
        <input type="email" name="email" required>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <p>¿No tienes cuenta? <a href="{{ route('register') }}">Register</a></p>
        <button type="submit">Enter</button>
    </form>
    @endsection
</body>
</html>