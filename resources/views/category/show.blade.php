@extends('category.master')
@section('front-section')
    <div class="show">
        <div>
            <h2>Update Details</h2>
        </div>
        <div>
            <label for="">Name</label><br>
            <input type="text" value="{{ $categories->name }}" readonly><br>
        </div>
    </div>
    @endsection