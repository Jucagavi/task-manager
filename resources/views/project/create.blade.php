@extends('layouts.app')

@section ('cabecera')
    
@endsection

<style>
    body {
        background-color: #632432;
    }
</style>
@section('content')
    <form method="POST" action="{{ route('project.store') }}">
        @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type=text name="name" />
                    {{-- @error('title')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror --}}
                </td>
            </tr>

            <tr>
                <td>State:</td>
                <td> 
                    <input type=text name="state" />
                    {{-- @error('description')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror --}}
                </td>
            </tr>
        </table>
        <input type="submit" value = "Create" />
    </form>
    <a href="{{ route ('project.index')}}"><input type="button" value="Back"></a>
@endsection