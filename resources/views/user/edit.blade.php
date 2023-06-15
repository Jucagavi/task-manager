@extends('layouts.app')

@section ('content')

    <form method="POST" action="{{ route ('user.update', $user->id) }}">
        @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <label for="name">User name:</label>
            <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="name" required="required">
        </div>
        <div class="form-group mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" value="{{ $user->email }}" name="email" id="email" required="required">
        </div>
        <div class="form-group mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password" required="required">
        </div>
        <div class="form-group mb-3">
            <select class="form-select" aria-label="Default select example" name="role" required="required">
                <option value="{{ $user->role }}">{{ $user->role }}</option>
                <option value="admin">admin</option>
                <option value="worker">worker</option>
            </select>
        </div>
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