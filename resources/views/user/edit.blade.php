@extends('layouts.app')

@section ('content')

    <form method="POST" action="{{ route ('user.update', $user->id) }}">
        @method('PUT')
        @csrf
        <table>
            <tr>
                <td>User name:</td>
                <td><input type="text" name="name" value="{{ $user->name }}"/></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" value="{{ $user->email }}"/></td>
            </tr>
            <tr>
                <td>Role:</td>
                <td><input type="text" name="role" value="{{ $user->role }}"/></td>
            </tr>
            <tr><td><input type="submit" value="Update" /></td></tr>
        </table>
    </form>
    <a href="{{ route('user.index') }}"><input type="button" value="Back"/></a>
@endsection


    {{-- @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}

    {{-- @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}