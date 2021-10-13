@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My Profile Page') }}</div>
                <div>
                    <h1>{{$user->name}}</h1>
                    @can('update', $user->profile)
                    <a href="/record/create">Add new BMI record</a>
                    @endcan

                </div>
                @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->BmiRecords->count() }}</strong> BMI records</div>
                </div>
                <div class="col-9 pt-5">
                    <div>
                        <div class="pt-4 font-weight-bold">Title:{{$user->profile->title}}</div>
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
    <div>
        <p>
            BMI Categories:
            Underweight = <18.5
            Normal weight = 18.5–24.9
            Overweight = 25–29.9
            Obesity = BMI of 30 or greater
        </p>
    </div>
    <div class="row pt-5">

        @foreach($user->BmiRecords as $record)
            <div class="col-4 pb-4">
                <p>Added on: {{$record->created_at}}</p><a href="/record/{{ $record->id }}">
                <p>bmi: {{$record->BMI}}</p>
                </a>
                <p>In Normal Range: {{$record->InRange}}</p>
            </div>
        @endforeach
     </div>
</div>
@endsection
