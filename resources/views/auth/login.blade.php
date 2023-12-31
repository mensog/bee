@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">{{__('loc.auth.login.title')}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-auth">
                <div class="card-auth__body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <label for="email">{{__('loc.auth.login.mail')}}</label>
                                <input id="email" type="email" placeholder="e-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <label for="password">{{__('loc.auth.login.pass')}}</label>
                                <input id="password" type="password" placeholder="{{ __('loc.auth.login.pass_inp') }}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{__('loc.auth.login.remem_me')}}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    {{__('loc.auth.login.auth')}}
                                </button>
                            </div>
                            <div class="col-12 text-center">
                                @if (Route::has('password.request'))
                                <a class="btn btn-link mt-3 mb-3" href="{{ route('password.request') }}">
                                    {{__('loc.auth.login.forgot')}}
                                </a>
                                <a class="btn btn-link" href="{{ route('register') }}">{{__('loc.auth.login.not_reg')}}</a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection