@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-4">{{ __('Сброс пароля') }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-auth">

                    <div class="card-auth__body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email">{{ __('E-Mail') }}</label>
                                    <input id="email" type="email"
                                           placeholder="Введите email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Отправить ссылку на восстановление пароля') }}
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
