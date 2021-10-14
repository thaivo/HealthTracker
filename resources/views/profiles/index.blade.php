@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi {{$user->name}} !</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>


                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan

                <div class="col-9 pt-5">
                    <div>
                        <div class="pt-4 font-weight-bold">Title:{{$user->profile->title}}</div>
                        <p>Gender: {{$user->profile->gender}}</p>
                        <p>Date Of Birth: {{$user->profile->DateOfBirth ?? 'N/A'}}</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">BMI Categories:</div>
                <div class="card-body">
                    <br>
                        Underweight = <18.5</br>
                        Normal weight = 18.5–24.9</br>
                        Overweight = 25–29.9</br>
                        Obesity = BMI of 30 or greater
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div>
            @can('update', $user->profile)
                <a href="/record/create">Add new BMI record</a>
            @endcan

    </div>
    <div class="d-flex">
        <div class="pr-5">You have <strong>{{ $user->BmiRecords->count() }}</strong> BMI record(s)</div>
    </div>
        <div class="row pt-5 table-responsive">
            <table class="table">
                @foreach($user->BmiRecords as $record)
                    <div class="col-4 pb-4">
                        <p>Added on: {{$record->created_at}}</p><a href="/record/{{ $record->id }}">
                        <p>bmi: {{$record->BMI}}</p>
                        </a>
                        <p>In Normal Range: {{$record->InRange}}</p>
                    </div>
                @endforeach
            </table>
        </div>

</div>
@endsection
