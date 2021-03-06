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
        <div class="col-md-4">
            <div class="card">
                <div class="text-center my-4"  style="font-size: 24px;">
                    <img src="{{asset('img/lock2.png')}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h4 >¿Tienes problemas para iniciar sesión?</h4>
                                <p>Ingresa tu correo electrónico y te enviaremos un enlace para recuperar el acceso a tu cuenta.</p>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group my-5 mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Enviar enlace de inicio de sesión') }}
                                </button>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group my-5">
                            <a href="{{ route('register') }}"  class="btn btn-link small btn-user btn-block">
                            ¿No tienes una cuenta?  Regístrate
                            </a>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-muted text-center">
                    <a class="btn-link small" href="{{ route('login') }}" style="color: #619eff">Volver al inicio de sesión</a>
                </div>
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
