@extends('blog.master')
@section('front-section')
    <div class="create">
        <div>
            <h2>Add Blogs</h2>
        </div>
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div>
                <label for="">Title</label><br>
                <input type="text" name="title"><br>
                <label for="">Slug</label><br>
                <input type="text" name="slug"><br><br>
                <label for="">Description</label><br>
                <textarea name="description" id="" cols="30" rows="10"></textarea><br>
                <label for="">Category_id</label><br>
                <select name="category_id" id="">
                    @foreach($categories as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
                <br>
            </div><br>
            <div class="button">
                <button type="submit">Submit</button>
            </div>

        </form>
    </div>
@endsection