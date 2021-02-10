@extends('layouts.app')

@section('content')
<div style="background-image: url('img/fond-login.jpg'); background-position: center; box-shadow: 3px 3px 4px blue;">
<div class="container" style="background-color: rgba(1, 1, 1, 0.4)">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-transparent shadow">
        <div class="card-header text-center text-light border-bottom border-primary shadow"><h2 class="font-weight-bold">{{ __('Ingreso') }}</h2></div>

        <div class="card-body" style="background-color: rgba(1, 1, 1, 0.5) ">
<form method="POST" action="{{ route('login') }}">
@csrf

<div class="form-group row">
     <label for="email" class="col-md-4 col-form-label text-md-right text-light">{{ __('Correo Eléctronico') }}</label>

        <div class="col-md-6">
     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="correo" autofocus>

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
        </div>
     </div>

<div class="form-group row">
  <label for="password" class="col-md-4 col-form-label text-md-right text-light">{{ __('Contraseña') }}</label>

 <div class="col-md-6">
  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
         </div>
    </div>

<div class="form-group row">
    <div class="col-md-6 offset-md-4">
        <div class="form-check">
    <input class="form-check-input" type="checkbox" name="recordarme" id="recordarme" {{ old('recordarme') ? 'checked' : '' }}>

<label class="form-check-label text-light" for="recordarme">{{ __('Recordarme') }}</label>
    </div>
        </div>
</div>

     <div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
{{ __('Ingresar') }}</button>

@if (Route::has('password.request'))
<a class="btn btn-link" href="{{ route('password.request') }}">{{ __('¿ Ha Olvidado su Contraseña ?') }}
</a>
@endif
    </div>
    </div>
</form>
    </div>
    </div>
    </div>
    </div>
</div>
</div>
@endsection
