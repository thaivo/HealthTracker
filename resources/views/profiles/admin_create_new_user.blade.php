@extends('layouts.app')
@section()
    <h1>New User</h1>
    <form method="post" action="/admin/users/store">
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
            <label for="retype_password">Retype password: </label>
            <input id="retype_password" name="retype_password" type="password">
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
    </form>
@endsection
