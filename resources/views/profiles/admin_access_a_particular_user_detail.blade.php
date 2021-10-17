@extends('layouts.app')

@section('content')
    <h2>User information</h2>
    <p>
        Title: {{$profile->title}}
    </p>
    <p>
        DOB: {{$profile->DateOfBirth}}
    </p>
    <p>
        Gender: {{$profile->gender}}
    </p>
    <a href="/admin/users">Back</a>
    <a href="/admin/users/edit/{{$profile->id}}">Edit</a>
@endsection

