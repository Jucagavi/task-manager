@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    @section('cabecera')
    @endsection
    
    @section('content')
    <h2>Register</h2>
    <form method="POST" action="{{ route('validate-register') }}">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required autocomplete="disable">
        <label>Password:</label>
        <input type="password" name="password" required>
        <label>Name:</label>
        <input type="text" name="name" required autocomplete="disable">
        <br><br>
        <button type="submit">Register</button>
    </form>
    <br>
    <a href="{{ route('login') }}"><input type="button" value="Back"/></a>
    @endsection

</body>
</html>