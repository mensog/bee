@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">{{__('loc.auth.reg.title')}}</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-auth">
                <div class="card-auth__body">
                    <form class="registration" method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-6">
                                <label for="name">{{__('loc.auth.reg.name')}}</label>
                                <input id="name" type="text" placeholder="{{__('loc.auth.reg.name_inp')}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="surname">{{__('loc.auth.reg.surname')}}</label>
                                <input id="surname" type="text" placeholder="{{__('loc.auth.reg.surname_inp')}}" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

                                @error('surname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email">e-mail</label>
                                <input id="email" type="email" placeholder="{{__('loc.auth.reg.mail_inp')}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">

                            <div class="col-md-12">
                                <label for="password">{{__('loc.auth.reg.pass.0')}} <span class="text-secondary small">{{__('loc.auth.reg.pass.1')}}</span></label>
                                <input id="password" type="password" placeholder="{{__('loc.auth.reg.pass_inp')}}" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="password-confirm">{{__('loc.auth.reg.pass_rep')}}</label>
                                <input id="password-confirm" type="password" class="form-control" placeholder="{{__('loc.auth.reg.pass_rep_inp')}}" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1 pr-0">
                                <input id="personal-data-agreement" type="checkbox" class="form-control" name="personal-data-agree" required>
                            </div>
                            <div class="col-md-10 align-self-end">
                                <label class="pl-0" for="personal-data-agreement">{{__('loc.auth.reg.agree.0')}} <a href="{{ route('personal-data-agreement') }}">{{__('loc.auth.reg.agree.1')}}</a></label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button disabled type="submit" class="btn btn-primary">
                                    {{__('loc.auth.reg.registr')}}
                                </button>
                            </div>
                            <div class="col-md-12 text-center">
                                <a class="btn btn-link" href="{{ route('login') }}">{{__('loc.auth.reg.auth')}}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection