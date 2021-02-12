@extends('layouts.app')

@section('content')
<div style="background-image: url('img/fond-login.jpg'); background-position: center; box-shadow: 3px 3px 4px blue;">
<div class="container" style="background-color: rgba(1, 1, 1, 0.4)">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-transparent shadow">
<div class="card-header text-center text-light border-bottom border-primary shadow"><h2 class="font-weight-bold">{{ __('Registrarse') }}</h2></div>

     <div class="card-body" style="background-color: rgba(1, 1, 1, 0.5)">
    <form method="POST" action="{{route('register')}}">
    @csrf

             <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right text-light">{{ __('Nombre de Usuario') }}</label>

    <div class="col-md-6">
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                @error('nombre')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
                                @enderror
                            </div>
                        </div>

    <div class="form-group row">
<label for="email" class="col-md-4 col-form-label text-md-right text-light">{{ __('Correo del Usuario') }}</label>

    <div class="col-md-6">
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
 <input id="password" type="password" class="form-control @error('contraseña') is-invalid @enderror" name="password" required autocomplete="new-password">

         @error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
        @enderror
        </div>
                        </div>

    <div class="form-group row">
<label for="password-confirm" class="col-md-4 col-form-label text-md-right text-light">{{ __('Confirmar Contraseña') }}</label>

        <div class="col-md-6">
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
                        </div>
<div class="d-flex justify-content-center">

         <div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
 <button type="delete" class="btn btn-danger">
                                {{ __('Borrar') }}
                                </button>
                            </div>
                        </div>

     <div class="form-group row mb-0">
     <div class="col-md-6 offset-md-4">
     <button type="submit" class="btn btn-primary">{{ __('Registrarse') }}
    </button>
                            </div>
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
