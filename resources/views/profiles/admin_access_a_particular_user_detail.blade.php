@extends('layouts.app')

@section('content')
    <div class="container">

    </div>
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
    <form method="post" action="/admin/users/delete/{{$profile->id}}">
        @csrf
        <button>Delete</button>
    </form>
@endsection

