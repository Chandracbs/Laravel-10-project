@extends('category.master')
@section('front-section')
    <div class="edit">
        <div>
            <h2>Edit Categories</h2>
        </div>
        <form action="{{ route('update1',$categories->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="">Name</label><br>
                <input type="text" value="{{ $categories->name }}" name="name"><br>
            <div class="button">
                <button type="submit">Update</button>
            </div>

        </form>
    </div>
@endsection