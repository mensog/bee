@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">Восстановление пароля</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-auth">

                    <div class="card-auth__body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="email">e-mail</label>
                                    <input id="email" type="email"
                                           placeholder="Введите e-mail"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="password">Новый пароль (не менее 8 символов)</label>
                                    <input id="password" type="password"
                                           placeholder="Введите пароль"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password-confirm">Повторите пароль</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           placeholder="Повторите пароль"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        Задать новый пароль
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
