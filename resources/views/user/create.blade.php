@extends('user.master')
@section('front-section')
    <div class="create">
        <div>
            <h2>Add Users</h2>
        </div>
        <form action="{{ route('store2') }}" method="POST">
            @csrf
            <div>
                <label for="">Name</label><br>
                <input type="text" name="name"><br>
                <label for="">Email</label><br>
                <input type="text" name="email"><br>
                <label for="">Password</label><br>
                <input type="password" name="password"><br>
                
            <div class="button">
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
@endsection