@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="/l" enctype="multipart/form-data" method="post">
        @csrf
        <h1>Create Lobby</h1>


        <div class="col-md-12">
          <label for="title" class="col-form-label">Title:</label>
          <input for="title" type="text" class="form-control{{$errors->has('title') ? 'is invalid' : ''}}" name="title" value="{{old('title')}}" autocomplete="title" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('title')}}</strong>
          </span>
          @endif
        </div>

        <div class="col-md-12">
          <label for="region" class="col-form-label">Region:</label>
          <input for="region" type="text" class="form-control{{$errors->has('region') ? 'is invalid' : ''}}" name="name" value="{{old('region')}}" autocomplete="region" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('region')}}</strong>
          </span>
          @endif
        </div>

        <div class="col-md-12">
          <label for="language" class="col-form-label">Language:</label>
          <input for="language" type="text" class="form-control{{$errors->has('language') ? 'is invalid' : ''}}" name="name" value="{{old('language')}}" autocomplete="language" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('language')}}</strong>
          </span>
          @endif
        </div>

        <div class="col-md-12">
          <label for="players" class="col-form-label">Players:</label>
          <input for="players" type="text" class="form-control{{$errors->has('players') ? 'is invalid' : ''}}" name="players" value="{{old('players')}}" autocomplete="players" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('players')}}</strong>
          </span>
          @endif
        </div>

        <div class="col-md-12">
          <label for="map" class="col-form-label">Map:</label>
          <input for="map" type="text" class="form-control{{$errors->has('map') ? 'is invalid' : ''}}" name="map" value="{{old('map')}}" autocomplete="map" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('map')}}</strong>
          </span>
          @endif
        </div>

        <div class="col-md-12">
          <label for="competitive" class="col-form-label">Competitive?:</label>
          <input for="competitive" type="text" class="form-control{{$errors->has('competitive') ? 'is invalid' : ''}}" name="competitive" value="{{old('competitive')}}" autocomplete="competitive" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('competitive')}}</strong>
          </span>
          @endif
        </div>

        <div class="col-md-12">
          <label for="imposter" class="col-form-label">Number of Imposters:</label>
          <input for="imposter" type="text" class="form-control{{$errors->has('name') ? 'is invalid' : ''}}" name="name" value="{{old('imposter')}}" autocomplete="imposter" autofocus>

          @if ($errors->has('caption'))
          <span class="invalid-feedback" role="alert">
            <strong>{{$errors->first('imposter')}}</strong>
          </span>
          @endif
        </div>

        <div class="col-md-12 pt-3">
          <button class="btn btn-primary">Submit</button>
        </div>



      </div>



    </form>
  </div>
  @endsection
