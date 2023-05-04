@extends('category.master')
@section('front-section')
    <div class="index">
        <div class="label">
            <a href="{{route('create1')}}"><button type="button">Add Categories</button></a>
        </div>
        <div class="table">
        @if(Session::has('success'))
        <p>{{ Session::get('success') }}</p>            
        @endif
            <table id="customers">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if($categories->count()>0)
                    @foreach($categories as $value)
                    <tr>
                        
                        <td>{{ $value->iteration }}</td>
                        <td>{{ $value->name }}</td>
                        <td>
                            <a href="{{route('show1', $value->id)}}"><button type="button">View</button></a>
                            <a href="{{route('edit1', $value->id)}}"><button type="button">Edit</button></a>
                            <form action="{{ route('destroy1', $value->id)}}" method="POST" type="button" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                                <button type="">Delete</button>
                            </form>        
                        </td>        
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="3">User Not Found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection   