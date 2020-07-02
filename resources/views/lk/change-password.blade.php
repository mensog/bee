@extends('layouts.lk')

@section('content')
    <h2>Смена e-mail</h2>
    <div class="card-lk">
        <div class="card-lk__body">
            <form id="changePassword" action="{{ route('lk_profile_change_password') }}">
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="password">Текущий пароль</label>
                        <input id="password" type="password"
                               class="form-control" name="password">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="newPassword">Новый пароль <span class="text-secondary small">(не менее 8 символов)</span></label>
                        <input id="newPassword" type="password"
                               class="form-control" name="newPassword">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label for="newPasswordConfirmation">Подтвердите новый пароль</label>
                        <input id="newPasswordConfirmation" type="password"
                               class="form-control" name="newPasswordConfirmation">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary m-auto d-table">
                    Сохранить изменения
                </button>
            </form>
        </div>
    </div>
@endsection
