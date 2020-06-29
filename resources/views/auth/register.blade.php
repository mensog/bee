@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">{{ __('Регистрация') }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-auth">
                    <div class="card-auth__body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">


                                <div class="col-md-6">
                                    <label for="name">{{ __('Имя') }}</label>
                                    <input id="name" type="text"
                                           placeholder="Введите имя"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="surname">{{ __('Фамилия') }}</label>
                                    <input id="surname" type="text"
                                           placeholder="Введите фамилию"
                                           class="form-control @error('surname') is-invalid @enderror" name="surname"
                                           value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email">{{ __('e-mail') }}</label>
                                    <input id="email" type="email"
                                           placeholder="Введите e-mail"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">

                                <div class="col-md-12">
                                    <label for="password">{{ __('Пароль') }}</label>
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
                                    <label for="password-confirm">{{ __('Повторите пароль') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           placeholder="Повторите пароль"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Зарегистрироваться') }}
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
