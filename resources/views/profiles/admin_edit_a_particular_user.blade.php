@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Profile Update</h1>
        <form method="POST" action="/admin/users/update/{{$user->id}}">
            @csrf
            <div class="row">
                <div class="col-4 offset-4">
                    <input id="id" name="id" type="text" class="form-control d-none" value="{{$user->id}}">
                    <div class="form-group row">
                        <label for="title" class="col-md-5 col-form-label">
                            Title:
                        </label>
                        <input id="title" name="title" type="text" class="form-control" value="{{$user->title}}" required>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-md-5 col-form-label">
                            Gender:
                        </label>
                        <input id="gender" name="gender" type="text" class="form-control" value="{{$user->gender}}">
                    </div>
                    <div class="form-group row">
                        <label for="DateOfBirth" class="col-md-5 col-form-label">
                            Date Of Birth:
                        </label>
                        <input id="DateOfBirth" name="DateOfBirth" type="date" class="form-control" value="{{$user->DateOfBirth}}">
                    </div>
                </div>
            </div>
            <div class="row pt-4 col-4 offset-4">
                <button class="btn btn-primary">Update</button>
            </div>
            <a href="/admin/users/detail/{{$user->id}}">Cancel</a>
        </form>
    </div>


    {{--<form method="POST" action="/admin/users/update/{{$user->id}}">
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
    </form>--}}
@endsection
