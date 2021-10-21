@extends('layouts.app')
@section('content')
    <div class="container">

        <h1>New User</h1>
        <form method="POST" action="/admin/users/store">
            @csrf
            <div class="row">
                <div class="col-4 offset-4">
                <div class="form-group row">
                    <label for="name" class="col-md-5 col-form-label">
                        Name:
                    </label>
                    <input id="name" name="name" type="text" class="form-control" required>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-md-5 col-form-label">
                        Email:
                    </label>
                    <input id="email" name="email" type="email" class="form-control" required>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-5 col-form-label">
                        Password:
                    </label>
                    <input id="password" name="password" type="password" class="form-control" required>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-5 col-form-label">
                        Title:
                    </label>
                    <input id="title" name="title" type="text" class="form-control" required>
                </div>
                <div class="form-group row">
                    <label for="gender" class="col-md-5 col-form-label">
                        Gender:
                    </label>
                    <input id="gender" name="gender" type="text" class="form-control" required>
                </div>
                <div class="form-group row">
                    <label for="DateOfBirth" class="col-md-5 col-form-label">
                        Date Of Birth:
                    </label>
                    <input id="DateOfBirth" name="DateOfBirth" type="date" class="form-control" required>
                </div>
            </div>
        </div>
            <div class="row pt-4 col-4 offset-4">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>




{{--    <form method="POST" action="/admin/users/store">
        @csrf
        <div>
            <label for="name">Name: </label>
            <input id="name" name="name">
        </div>
        <div>
            <label for="email">Email: </label>
            <input id="email" name="email" type="email">
        </div>
        <div>
            <label for="password">Password: </label>
            <input id="password" name="password" type="password">
        </div>
        <div>
            <label for="title">Title: </label>
            <input id="title" name="title">
        </div>
        <div>
            <label for="gender">Gender: </label>
            <input id="gender" name="gender">
        </div>
        <div>
            <label for="DateOfBirth">DOB: </label>
            <input id="DateOfBirth" name="DateOfBirth">
        </div>
        <button>Create</button>
        <a href="/admin/users">Cancel</a>
    </form>--}}
@endsection
