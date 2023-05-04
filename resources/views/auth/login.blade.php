@extends('auth.master')

@section('front-section')

<div class="container">
        <div>
            <h2>Login form</h2>
        </div>
        <form action="{{ route('login_submit') }}" method="POST">
            @csrf
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
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>
            
        </form>
    </div>

@endsection