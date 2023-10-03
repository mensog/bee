<x-header />
<div class="container py-4">
    <div class="row">
        <div class="col-lg-3">
            <div class="sticky-top">
                <h2>{{ __('loc.layout.lk.sidebar.nav') }}</h2>
                <div class="lk-sidebar">
                    <ul>
                        <li>
                            <a class="{{ Route::currentRouteName() == 'lk' ? 'active' : '' }}" href="{{ route('lk') }}">{{ __('loc.layout.lk.sidebar.home') }}</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() == 'lk_orders' ? 'active' : '' }}" href="{{ route('lk_orders') }}">{{ __('loc.layout.lk.sidebar.shopping_history') }}</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() == 'lk_profile' ? 'active' : '' }}" href="{{ route('lk_profile') }}">{{ __('loc.layout.lk.sidebar.personal_data') }}</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() == 'lk_profile_edit_data_form' ? 'active' : '' }}" href="{{ route('lk_profile_edit_data_form') }}">{{ __('loc.layout.lk.sidebar.edit_personal') }}</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() == 'lk_profile_change_email_form' ? 'active' : '' }}" href="{{ route('lk_profile_change_email_form') }}">{{ __('loc.layout.lk.sidebar.edit_mail') }}</a>
                        </li>
                        <li>
                            <a class="{{ Route::currentRouteName() == 'lk_profile_change_password_form' ? 'active' : '' }}" href="{{ route('lk_profile_change_password_form') }}">{{ __('loc.layout.lk.sidebar.edit_pass') }}</a>
                        </li>
                        <li>
                            <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{ route('logout') }}">{{ __('loc.layout.lk.sidebar.exit') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
<x-footer :passwordChanged="$passwordChanged ?? ''" />