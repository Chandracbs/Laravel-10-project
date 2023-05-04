@extends('user.master')
@section('front-section')
    <div class="index">
        <div class="label">
            <a href="{{route('create2')}}"><button type="button">Add Users</button></a>
        </div>
        <div class="table">
        @if(Session::has('success'))
        <p>{{ Session::get('success') }}</p>            
        @endif
            <table id="customers">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if($users->count()>0)
                    @foreach($users as $value)
                    <tr>
                        
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>
                            <a href="{{route('show2', $value->id)}}"><button type="button">View</button></a>
                            <a href="{{route('edit2', $value->id)}}"><button type="button">Edit</button></a>
                            <form action="{{ route('destroy2', $value->id)}}" method="POST" type="button" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                                <button type="">Delete</button>
                            </form>        
                        </td>        
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="4">User Not Found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection   