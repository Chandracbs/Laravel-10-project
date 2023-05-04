@extends('user.master')
@section('front-section')
    <div class="edit">
        <div>
            <h2>Edit Users</h2>
        </div>
        <form action="{{ route('update2',$users->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="">Name</label><br>
                <input type="text" value="{{ $users->name }}" name="name"><br>
                <label for="">Email</label><br>
                <input type="text" value="{{ $users->email }}" name="email"><br>
            <div class="button">
                <button type="submit">Update</button>
            </div>

        </form>
    </div>
@endsection