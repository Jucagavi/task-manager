@extends('layouts.app')

@section('cabecera')
@endsection

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Task Manager</title>
    </head>
    <body>
        <a href="{{ route ('project.index') }}" ><input type="button" value="CRUD Project"></a>
        <a href="{{ route ('task.index') }}" ><input type="button" value="CRUD Task"></a>
        <a href="" ><input type="button" value="CRUD User"></a>
        
            {{-- @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
    </body>
</html>
