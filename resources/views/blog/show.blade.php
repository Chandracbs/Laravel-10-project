@extends('blog.master')
@section('front-section')
    <div class="show">
        <div>
            <h2>Update Details</h2>
        </div>
        <div>
            <label for="">Title</label><br>
            <input type="text" value="{{ $blogs->title }}" readonly><br>
            <label for="">Slug</label><br>
            <input type="text" value="{{ $blogs->slug }}" readonly><br><br>
            <label for="">Description</label><br>
            <textarea name="" id="" cols="30" rows="10" readonly>{{ $blogs->description }}</textarea><br><br>
            <label for="">Category_id</label><br>
            <input type="text" value="{{ $blogs->category_id }}"><br>
            <label for="">User_id</label><br>
            <input type="text" value="{{ $blogs->user_id }}"><br>
            <label for="">Last_Updated_by</label><br>
            <input type="text" value="{{ $blogs->last_updated_by }}">
        </div>
    </div>
    @endsection