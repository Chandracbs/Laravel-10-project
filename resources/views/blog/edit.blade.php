@extends('blog.master')
@section('front-section')
    <div class="edit">
        <div>
            <h2>Edit Blogs</h2>
        </div>
        <form action="{{ route('update',$blogs->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="">Title</label><br>
                <input type="text" value="{{ $blogs->title }}" name="title"><br>
                <label for="">Slug</label><br>
                <input type="text" value="{{ $blogs->slug }}" name="slug"><br><br>
                <label for="">Description</label><br>
                <textarea id="" cols="30" rows="10" name="description"> {{ $blogs->description }}</textarea>            
            </div>
            <div class="button">
                <button type="submit">Update</button>
            </div>

        </form>
    </div>
@endsection