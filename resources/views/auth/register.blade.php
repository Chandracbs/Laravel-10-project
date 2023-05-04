@extends('auth.master')
@section('front-section')
    <div class="container">
        <div>
            <h2>Register User</h2>
        </div>
        <form action="{{ route('register_submit') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <input type="text" name="name" placeholder="Name" class="form-control" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <input type="email" name="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <input type="password" name="password" placeholder="Password" class="form-control" value="{{ old('password') }}">
                @error('password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <input type="password" name="retype_password" placeholder="Retype Password" class="form-control" value="{{ old('retype_password') }}">
                @error('retype_password')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>
            
        </form>
    </div>
@endsection