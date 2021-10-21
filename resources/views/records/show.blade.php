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
        <div class="col-4 offset-8">
          <a href="/record/{{ $record->id }}/edit" class="btn btn-primary">Edit</a>
            <form method="post" action="/record/{{$record->id}}/delete">
                @csrf

                <button class="mt-2 btn btn-danger">Delete</button>

            </form>
        </div>

       <!--@can('update', $record->id)
            <a href="/record/{{ $record->id }}/edit">Edit</a>
        @endcan-->

    </div>
    <a href="{{ URL::previous() }}" class="btn btn-link">Back</a></div>
</div>
@endsection
