@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
 <!-- name  -->
                          <div class="form-group row">
                           
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <div id="emailHelp" class="form-text">Ecriba su nombre</div>
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
   <!-- end name -->
   <!-- correo  -->
                        <div class="form-group row">
                           
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <div id="emailHelp" class="form-text">Escriba su Correo Electronico</div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
<!-- end correo  -->

<!-- Password  -->
                        <div class="form-group row">
                        <div class="mb-3">
                        <label for="inputPassword5" class="form-label">Contraseña</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <div id="emailHelp" class="form-text">Su contraseña debe tener entre 8 y 20 caracteres, contener letras y números, y no debe contener espacios, caracteres especiales ni emoji.</div>
                        
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        </div>
<!-- end password  -->
<!-- confirmar password  -->
                        <div class="form-group row"> 
                           
                            <div class="mb-3">
                            <label for="inputPassword5" class="form-label">Password</label>
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <div id="emailHelp" class="form-text">Confirmar contraseña antesmente ingresada </div>
                            
                            </div>

                        </div>

<!-- end confirmar password  -->
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"  class="btn btn-danger">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
