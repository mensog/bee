@extends('layouts.lk')

@section('content')
    <h2>Изменение личных данных</h2>
    <div class="card-lk">
        <div class="card-lk__body">
            <form id="editData" action="{{ route('lk_profile_edit_data') }}">
                @csrf
                <div class="form-group row">
                    <div class="col-md-6">
                        <label for="name">Имя</label>
                        <input id="name" type="text"
                               placeholder="Введите имя"
                               class="form-control" name="name"
                               value="{{ $user->name }}">
                    </div>
                    <div class="col-md-6">
                        <label for="surname">Фамилия</label>
                        <input id="surname" type="text"
                               placeholder="Введите фамилию"
                               class="form-control" name="surname"
                               value="{{ $user->surname }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="phone">Телефон</label>
                        <input id="phone" type="phone"
                               placeholder="+7 (000) 000-00-00"
                               class="form-control" name="phone"
                               value="{{ $user->phone }}">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="address">Адрес доставки</label>
                        <input id="address" type="text"
                               placeholder="Введите адрес доставки"
                               class="form-control" name="address"
                               value="{{ $user->address }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary m-auto d-table">
                    Сохранить изменения
                </button>
            </form>
        </div>
    </div>
@endsection
