@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="form-group row">
            <label for="name" type="text" class="form-control{{$errors->has('name') ? 'is invalid'}}" name="name" value="{{old('name')}}" autocomplete>
          </div>
        </div>
@endsection
