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
                    <input type=text name="name" required="required"/>
                    {{-- @error('title')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror --}}
                </td>
            </tr>

            <tr>
                <td>Status:</td>
                <td> 
                    <input type=text name="state" />
                    {{-- @error('description')
                        <p style="color: red;">{{ $message }}</p>
                    @enderror --}}
                </td>
            </tr>
        </table>
        <input type="submit" value = "Create" class="btn btn-primary"/>
    </form>
    <a href="{{ route ('project.index')}}"><input type="button" value="Back" class="btn btn-primary"></a>
@endsection