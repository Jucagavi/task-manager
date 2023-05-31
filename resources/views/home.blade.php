@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task Manager</title>
    </head>
    <body>
        @section('cabecera')
        @endsection
        
        @section('content')
        <a href="{{ route ('project.index') }}" ><input type="button" value="CRUD Project"></a>
        <a href="{{ route ('task.index') }}" ><input type="button" value="CRUD Task"></a>
        <a href="" ><input type="button" value="CRUD User"></a>
        <br><br>
        <a href="{{ route('logout') }}"><input type="button" value="Exit"/></a>
        @endsection
        
    </body>
</html>
