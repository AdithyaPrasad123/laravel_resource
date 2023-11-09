@extends('layout.app')
@section('content')
@if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
<a href="{{route('student.create')}}" class="btn btn-primary">Add Student</a>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th colspan="3" class="text-center">Action</th>
    </tr>
    <tr>
        @foreach($data as $datas)
        <td>{{$datas->name}}</td>
        <td>{{$datas->email}}</td>
        <td>{{$datas->mobile}}</td>
        <td><a href="{{route('student.show',$datas->id)}}" class="btn btn-success">Show</a></td>
        <td><a href="{{route('student.edit',$datas->id)}}" class="btn btn-warning">Edit</a></td>
        <td>
            <form action="{{route('student.destroy',$datas->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" name="delete" value="DELETE" class="btn btn-danger">
            </form>
        </td>
        @endforeach
    </tr>
</table>
@endsection