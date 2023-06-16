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
    <a href="{{ route('user.index') }}" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
    </a>
@endsection


    {{-- @error('title')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}

    {{-- @error('description')
        <p style="color: red;">{{ $message }}</p>
    @enderror --}}