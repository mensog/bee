@extends('layouts.lk')

@section('content')
    <h2>Личные данные</h2>
    <div class="card-lk">
        <div class="card-lk__body">
            <p class="card-lk__title">
                Имя: <span>{{ $user->name }}</span>
            </p>
            <p class="card-lk__title">
                Фамилия: <span>{{ $user->surname }}</span>
            </p>
            <p class="card-lk__title">
                e-mail: <span>{{ $user->email }}</span>
            </p>
        </div>
    </div>
@endsection
