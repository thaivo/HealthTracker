@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')


        <div>
            <h1>Edit Profile</h1>
        </div>
        <div class="row">
            <div class="col-4 offset-4">
                <div class="form-group row">
                    <label for="title" class="col-md-4 pt-4 col-form-label">{{ __('Title: ') }}</label>
                    <input id="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}"
                           required autocomplete="title" autofocus>


                    @error('title')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="gender" class="col-md-4 pt-4 col-form-label">{{ __('Gender: ') }}</label>
                    <input id="gender"
                           type="text"
                           class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') ?? $user->profile->gender  }}"
                           required autocomplete="name" autofocus>


                    @error('gender')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror

                </div>
                <div class="form-group row">
                    <label for="DateOfBirth" class="col-md-4 pt-4 col-form-label">{{ __('Date Of Birth: ') }}</label>
                    <input id="DateOfBirth"
                           type="date"
                           class="form-control @error('DateOfBirth') is-invalid @enderror" name="DateOfBirth" value="{{ old('DateOfBirth') ?? $user->profile->dateOfBirth  }}"
                           required autocomplete="name" autofocus>


                    @error('DateOfBirth')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                    @enderror

                </div>
            </div>
        </div>
        <div class="row pt-4 col-4 offset-4">
            <button class="btn btn-primary">Save Profile</button>
        </div>
    </form>
    <a href="{{ URL::previous() }}" class="btn btn-link">Back</a></div>

</div>
@endsection
