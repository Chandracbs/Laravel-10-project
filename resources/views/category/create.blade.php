@extends('category.master')
@section('front-section')
    <div class="create">
        <div>
            <h2>Add Categories</h2>
        </div>
        <form action="{{ route('store1') }}" method="POST">
            @csrf
            <div>
                <label for="">Name</label><br>
                <input type="text" name="name"><br>
                
            <div class="button">
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
@endsection