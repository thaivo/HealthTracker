@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h3>Here is your BMI record from:</h3>
             <p>{{$record->created_at}}</p>
        </div>
        <div class="col-4">
            <p>BMI: {{ $record->BMI }}</p>
            <p>Weight: {{ $record->weight }}</p>
            <p>Height: {{ $record->height }}</p>
        </div>
    </div>
    <a href="{{ URL::previous() }}" class="btn btn-link">Back</a></div>

</div>
@endsection
