@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/record/{{ $record->id }}" enctype="multipart/form-data" method="post">
            @csrf



            <div>
                <h1>Edit</h1>
            </div>
            <div class="row">
                <div class="col-4 offset-4">

                    <div class="form-group row">
                        <label for="weight" class="col-md-4 pt-4 col-form-label">{{ __('Weight: ') }}</label>
                        <input id="weight"
                               type="number"
                               class="form-control @error('weight') is-invalid @enderror" name="weight" value="{{ old('weight') ?? $record->weight  }}"
                               required autocomplete="name" autofocus>


                        @error('weight')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="height" class="col-md-4 pt-4 col-form-label">{{ __('Height: ') }}</label>
                        <input id="height"
                               type="number"
                               class="form-control @error('height') is-invalid @enderror" name="height" value="{{ old('height') ?? $record->height  }}"
                               required autocomplete="name" autofocus>


                        @error('height')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                </div>
            </div>
            <div class="row pt-4 col-4 offset-4">
                <button class="btn btn-primary">Save</button>
            </div>
        </form>
        <a href="{{ URL::previous() }}" class="btn btn-link">Back</a></div>

    </div>
@endsection

