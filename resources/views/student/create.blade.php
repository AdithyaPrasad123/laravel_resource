@extends('layout.app')
@section('content')
<form action="{{route('student.store')}}" method="POST" class="mt-5">
    @csrf
    <input type="text" name="name" class="form-control" placeholder="Enter Name"><br>
    <input type="email" name="email" class="form-control" placeholder="Enter email"><br>
    <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile"><br>
    <input type="submit" class="btn btn-primary">
</form>
@endsection