@extends('layouts.appt')
@push('styles')
<style>
#div_top_hypers {
    background-color:#eeeeee;
    display:inline;

}
#ul_top_hypers li{
    display: inline;
    list-style:none;
    padding: 5px;

}
#copy{
    display: inline;
    padding: 5px;

}
</style>
@endpush
@section('content')
<main>
<div class="container my-5">
    <div class="row text-center">
            <div class="col-md-2"></div>

        <div class="col-md-4 d-none d-sm-none d-md-block">
            <img src="{{asset('img/portada.png')}}" class="img-fluid" alt="Responsive image">
        </div>
        <div class="col-md-4">
            <div class="card rounded shadow shadow-sm">
                <div class="card-body">
                    <form class="user" method="POST" action="{{ route('login') }}">
                       @csrf
                       <div class="row">
                            <div class="col-md-12 text-center">
                                    <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="Responsive image">
                            </div>
                        </div>
                        <hr>
                        <div class="form-group my-5">
                            <input id="email" type="email" class=" form-control form-control-user form-control @error('email') is-invalid @enderror" name="email" placeholder="Correo Electronico" value="{{ old('email') }}" required autocomplete="email" autofocus> @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                          </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password"> @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span> @enderror
                        </div>

                        <div class="form-group">
                            <div class="col-md-7 offset-md-4">
                                <div class="custom-control custom-checkbox small">
                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                    <label class="custom-control-label form-check-label" for="remember">
                                        {{ __('Recuérdame') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Iniciar sesión') }}
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link small" href="{{ route('password.request') }}">
                                {{ __('¿Olvidaste tu contraseña?') }}
                            </a> @endif
                        </div>
                        <hr>
                        <a href="{{ url('redirectg') }}" class="btn btn-danger btn-user btn-block">
                          <i class="fab fa-google"></i> Iniciar sesión con Google
                        </a>
                        <a href="{{url('redirect')}}" class="btn btn-user btn-block" style="background-color:#4267b2; color:#fff;">
                          <i class="fab fa-facebook-f"></i> Iniciar sesión con Facebook
                        </a>
                        <a href="{{ route('register') }}"  class="btn btn-link small btn-user btn-block">
                          ¿No tienes una cuenta?  Regístrate
                        </a>
                    </form>
                </div>
            </div>
            <div class="row">
                    <div class="col-md-12 text-center my-2">
                        <p>Descargar app</p>
                    </div>
                    <div class="col-lg-6 col-md-8 mx-auto"><a href="../html-link.htm"><img src="{{asset('img/3cd8a27083c0.png')}}" class="img-fluid" alt="Responsive image"></a></div>
                    <div class="col-lg-6 col-md-8 mx-auto"><a href="../html-link.htm"><img  src="{{asset('img/e2247c4f90de.png')}}" class="img-fluid" alt="Responsive image"></a></div>
                </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</main>
@endsection
@push('scripts')
@endpush
