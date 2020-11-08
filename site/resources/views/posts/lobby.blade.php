@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="form-group row">
            <label for="name" class="col-md-4-form-label text-md-right">Name:</label>
            <div class="col-md-6">
              <input for="name" type="text" class="form-control{{$errors->has('name') ? 'is invalid' : ''}}" name="name" value="{{old('name')}}" autocomplete="name" autofocus>

              @if ($errors->has('caption'))
                <span class="invalid-feedback" role="alert">
                  <strong>{{$errors->first('name')}}</strong>
                </span>
              @endif

            </div>
          </div>
        </div>
@endsection
