@extends('layouts.app')
<style>
    .left-side-container-img img {
        width: 300px;
        height: 110px;
    }

    .left-side-container-img {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100%;
        width: 100%;
        text-align: center;
    }

    .row.justify-content-center.mx-80 {
        max-width: 1000px;
        margin: auto;
    }

    .row.justify-content-center.mx-80 {
        background: #fff;
        border-radius: 5px;
        box-shadow: 0px 10px 34px -15px rgba(0, 0, 0, 0.24);
        padding: ;
    }

    .right-side-form-login {
        padding: 3rem !important;
    }

    .row.justify-content-center.mx-80 .col-sm-6 {
        padding: 0;
    }

    .left-side-container-img {
        background-color: #f2f2f2;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
    }

    .btn.btn-primary.rg {
        width: 100%;
        height: 45px;
        background-color: #b12e5f;
        border-color: #b12e5f;
    }
</style>
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mx-80">
            <div class="col-sm-6">
                <div class="left-side-container-img">
                    <img src="{{ asset('front_assets') }}/img/gainsandwells-logo1-.png">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right-side-form-login ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <h3>Admin login</h3>
                            </div>

                            <div class="col-sm-12">
                                <label for="email" class="col-md-4 col-form-label">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">


                            <div class="col-sm-12">
                                <label for="password" class="col-md-4 col-form-label ">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary rg">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-sm-12">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
@endsection