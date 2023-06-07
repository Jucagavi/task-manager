@extends('layouts.app')

    <?php $visibleboton=false; ?>
    @if(Auth::user()->role=='admin')
        <?php $visibleboton=true; ?>
    @endif
        @section('cabecera')
        @endsection
        
        @section('content')

        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route ('project.index') }}">CRUD PROJECT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route ('task.index') }}">CRUD TASK</a>
                </li>
                <li class="nav-item">
                    @if ($visibleboton)
                        <a class="nav-link" href="{{ route ('user.index') }}">CRUD USER</a>
                    @endif
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">EXIT</a>
                </li>            
            </ul>
        </nav> 


        {{-- <a href="{{ route ('project.index') }}" ><input type="button" value="CRUD Project"></a>
        <a href="{{ route ('task.index') }}" ><input type="button" value="CRUD Task"></a>
        @if ($visibleboton)
            <a href="{{ route ('user.index') }}" ><input type="button" value="CRUD User"></a>
        @endif
        <br><br>
        <a href="{{ route('logout') }}"><input type="button" value="Exit"/></a> --}}
        @endsection

