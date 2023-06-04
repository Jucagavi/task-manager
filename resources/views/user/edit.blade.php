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
                <td>
                    <select name="role" required="required">
                        <option value="{{ $user->role }}">{{ $user->role }}</option>
                        <option value="">-- Elija role --</option>
                        <option value="admin">Admin</option>
                        <option value="worker">Worker</option>
                    </select>
                </td>
            </tr>
        </table>
        <br>
        <input type="submit" value="Update" class="btn btn-primary"/>
    </form>
    <br>
    <a href="{{ route('user.index') }}"><input type="button" value="Back" class="btn btn-primary"/></a>
@endsection


    {{-- @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}

    {{-- @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}