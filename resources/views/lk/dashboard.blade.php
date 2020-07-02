@extends('layouts.lk')

@section('content')
    <h2>Главная</h2>
    <div class="row">
        <div class="col-lg-4">
            <a href="{{ route('lk_orders') }}">
                <div class="card-lk">
                    <div class="card-lk__body">
                        <p class="card-lk__title">История покупок</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="{{ route('lk_profile') }}">
                <div class="card-lk">
                    <div class="card-lk__body">
                        <p class="card-lk__title">Личные данные</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
