@extends('layouts.lk')

@section('content')
    <h2>{{ __('loc.layout.lk.profile.title') }}</h2>
    <div class="card-lk">
        <div class="card-lk__body">
            <p class="card-lk__title">
            {{ __('loc.layout.lk.profile.name') }} <span>{{ $user->name }}</span>
            </p>
            <p class="card-lk__title">
            {{ __('loc.layout.lk.profile.surname') }} <span>{{ $user->surname }}</span>
            </p>
            <p class="card-lk__title">
                e-mail: <span>{{ $user->email }}</span>
            </p>
        </div>
    </div>
@endsection
