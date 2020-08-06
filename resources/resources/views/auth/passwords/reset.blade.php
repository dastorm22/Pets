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
                        <img src="{{asset('img/reboot_arrow_3726.png')}}" class="img-fluid" alt="Responsive image">
                    </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <h1 >PAWLIFS</h1>
                                <p>Ingrese la nueva contraseña por favor</p>
                            </div>
                        </div>
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="email" type="email" placeholder="Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Contraseña" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Restablecer la contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
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
