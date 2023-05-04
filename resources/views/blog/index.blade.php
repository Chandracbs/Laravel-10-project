@extends('blog.master')
@section('front-section')
    <div class="index">
        <div class="label">
            <a href="{{route('create')}}"><button type="button">Add Blogs</button></a>
        </div>
        <div class="table">
        @if(Session::has('success'))
        <p>{{ Session::get('success') }}</p>            
        @endif
            <table id="customers">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th>Description</th>
                    <th>category_id</th>
                    <th>User_id</th>
                    <th>Last_updated_by</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @if($blogs->count()>0)
                    @foreach($blogs as $value)
                    <tr>
                        
                        <td>{{ $value->iteration }}</td>
                        <td>{{ $value->title }}</td>
                        <td>{{ $value->slug }}</td>
                        <td>{{ $value->description }}</td>
                        <td>{{ $value->category_id }}</td>
                        <td>
                            @if(!is_null($value->user_id))
                            {{ $value->user_id}}
                            @endif
                        </td>
                        <td> 
                            @if(!is_null($value->last_updated_by))
                                {{$value->upd->name }}
                            @endif
                        </td>
                        <td>
                            <a href="{{route('show', $value->id)}}"><button type="button">View</button></a>
                            <a href="{{route('edit', $value->id)}}"><button type="button">Edit</button></a>
                            <form action="{{ route('destroy', $value->id)}}" method="POST" type="button" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                                <button type="">Delete</button>
                            </form>        
                        </td>        
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="8">User Not Found</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection   