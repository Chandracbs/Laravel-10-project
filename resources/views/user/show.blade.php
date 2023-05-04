@extends('user.master')
@section('front-section')
    <div class="show">
        <div>
            <h2>Update Users</h2>
        </div>
        <div>
            <label for="">Name</label><br>
            <input type="text" value="{{ $users->name }}" readonly><br>
            <label for="">Email</label><br>
            <input type="text" value="{{ $users->email }}" readonly><br>

        </div>
    </div>
@endsection