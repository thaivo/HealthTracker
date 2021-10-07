@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div>
                    <h1>{{$user->name}}</h1>
                    <a href="#">Add new BMI record</a>
                </div>
                <div class="col-9 pt-5">
                    <div>
                        <p>Title: {{$user->profile->title}}</p>
                        <p>Gender: {{$user->profile->gender}}</p>
                        <p>Date Of Birth: {{$user->profile->DateOfBirth ?? 'N/A'}}</p>

                    </div>
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection