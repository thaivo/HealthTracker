@extends('layouts.app')

@section('content')
    <form method="POST" action="/admin/users/update/{{$user->id}}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input id="title" name="title" value="{{$user->title}}">
        </div>
        <div>
            <label for="dob">DOB</label>
            <input id="dob" name="DateOfBirth" value="{{$user->DateOfBirth}}">
        </div>
        <div>
            <label for="gender">Gender</label>
            <input id="gender" name="gender" value="{{$user->gender}}">
        </div>
        <button>Update</button>
        <a href="/admin/users/detail/{{$user->id}}">Cancel</a>
    </form>
@endsection
