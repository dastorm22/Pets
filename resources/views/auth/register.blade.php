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
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 my-2">
            <div class="card">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="Responsive image">
                                <hr>
                                <p class="my-3">Regístrate para ver información, fotos y videos de tus mascotas.</p>
                                <a href="{{url('/redirect')}}" class="btn btn-user btn-block" style="background-color:#4267b2; color:#fff;">
                                    <i class="fa fa-facebook-official"></i> Iniciar sesión con Facebook
                                </a>
                            </div>
                        </div>
                        <hr>
                            <label for="name" class="col-md-4 col-form-label text-md-right"></label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>
                            <input id="email" type="email"  class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            <label for="password" class="col-md-4 col-form-label text-md-right"></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"></label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password">
                        </div>
                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Registrarte') }}
                            </button>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center my-2">
                                <p>Al registrarte, aceptas nuestras Condiciones, la Política de datos y la Política de cookies.</p>
                            </div>
                            <a href="{{ route('login') }}" style="color: #619eff" class="btn btn-link small btn-user btn-block">
                                ¿Tienes una cuenta? Inicia sesión
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center my-2">
                    <p>Descargar app</p>
                </div>
                <div class="col-lg-6 col-md-8 mx-auto"><a href="../html-link.htm"><img src="{{asset('img/3cd8a27083c0.png')}}" href="{{ route('login') }}"class="img-fluid" alt="Responsive image"></a></div>
                <div class="col-lg-6 col-md-8 mx-auto"><a href="../html-link.htm"><img  src="{{asset('img/e2247c4f90de.png')}}" href="{{ route('login') }}"class="img-fluid" alt="Responsive image"></a></div>
            </div>
        </div>
    </div>
</div>
</main>
<footer class="text-muted my-5 text-center"><br>
    <div id="div_top_hypers">
        <ul id="ul_top_hypers">
            <li><b><a href="" class="a_top_hypers">INFORMACIÓN</a></b></li>
            <li><b><a href="" class="a_top_hypers">AYUDA</a></b></li>
            <li><b><a href="" class="a_top_hypers">PRIVACIDAD</a></b></li>
            <li><b><a href="" class="a_top_hypers">CONDICIONES</a></b></li>
            <p id="copy"> &copy; 2019-2020, PAWLIFS.</p>
        </ul>
    </div>
</footer>
@endsection
@push('scripts')
@endpush
