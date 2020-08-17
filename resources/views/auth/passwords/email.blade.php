@extends('layouts.app')

@section('content')
    <div class="auth-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card-auth">

                        <div class="card-auth__body">
                            <h3>Сброс пароля</h3>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" class="form floating-label" action="{{ route('password.email') }}">
                                @csrf

                                <div class="form-group row">

                                    <div class="col-md-12">
                                        <div class="form-control-container">
                                            <input id="email" type="email"
                                                   placeholder=" "
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email"
                                                   value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            <label for="email">E-mail</label>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary mb-0">
                                            Отправить ссылку для сброса пароля
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
