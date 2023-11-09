@extends('layout.app')
@section('content')
<form action="{{route('student.update',$data->id)}}" method="POST" class="mt-5">
    @csrf
    @method('PUT')
    <input type="text" name="name" class="form-control" value="{{$data->name}}"><br>
    <input type="email" name="email" class="form-control" value="{{$data->email}}"><br>
    <input type="text" name="mobile" class="form-control" value="{{$data->mobile}}"><br>
    <input type="submit" class="btn btn-primary" value="UPDATE">
</form>
@endsection