@extends('layouts.app')

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
