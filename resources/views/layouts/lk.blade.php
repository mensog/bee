<x-header/>
<div class="container py-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="sticky-top">
                <h2>Навигация</h2>
                <div class="lk-sidebar">
                    <ul>
                        <li>
                            <a href="{{ route('lk') }}">Главная</a>
                        </li>
                        <li>
                            <a href="{{ route('lk_orders') }}">Заказы</a>
                        </li>
                        <li>
                            <a href="{{ route('lk_profile') }}">Личные данные</a>
                        </li>
                        <li>
                            <a href="{{ route('lk_profile_edit_data_form') }}">Изменение личных данных</a>
                        </li>
                        <li>
                            <a href="{{ route('lk_profile_change_email_form') }}">Смена e-mail</a>
                        </li>
                        <li>
                            <a href="{{ route('lk_profile_change_password_form') }}">Смена пароля</a>
                        </li>
                        <li>
                            <a onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                               href="{{ route('logout') }}">Выйти</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            @yield('content')
        </div>
    </div>
</div>
<x-footer :passwordChanged="$passwordChanged ?? ''"/>
