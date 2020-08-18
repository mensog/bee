<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Beeclub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app-sass.css') }}">
</head>

<body>

<header id="header" class="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a href="{{ route('main') }}" class="navbar-brand">
                <img src="/svg/main/BeeClub-logo.svg" alt="">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Акции
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            О сервисе
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            Доставка
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('couriers') }}" class="nav-link">
                            Курьерам
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('suppliers') }}" class="nav-link">
                            Поставщикам
                        </a>
                    </li>
                </ul>
                <div class="menu-right">
                    <a class="position" href="#"><img src="/svg/main/position.svg" alt="">Москва</a>
                    <a class="login" href="{{ route('lk') }}">Войти в профиль</a>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-lg-2">

                <div class="dropdown">
                    <a class="catalog-btn btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Каталог <img src="/svg/main/catalog.svg" alt="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <ul class="dropdown__mainmenu">
                            <li class="dropdown__mainmenu-item">
                                <a class="dropdown__mainmenu-link" href="#">Стройматериалы</a>
                                <ul class="dropdown__menu">
                                    <li class="dropdown__menu-item">
                                        <a class="dropdown__menu-link" href="#">Сухие смеси и грунтовки</a>
                                        <ul class="dropdown__menu">
                                            <li class="dropdown__menu-item">
                                                <a class="dropdown__menu-link" href="#">Блоки строительные</a>
                                                <ul class="dropdown__menu">
                                                    <li class="dropdown__menu-item">
                                                        <a class="dropdown__menu-link" href="#">Блоки строительные</a>
                                                        <ul class="dropdown__menu">
                                                            <li class="dropdown__menu-item">
                                                                <a class="dropdown__menu-link" href="#">Блоки строительные</a>
                                                            </li>
                                                            <li class="dropdown__menu-item">
                                                                <a class="dropdown__menu-link" href="#">Плиты пазогребные</a>
                                                            </li>
                                                            <li class="dropdown__menu-item">
                                                                <a class="dropdown__menu-link" href="#">Кирпич</a>
                                                            </li>
                                                            <li class="dropdown__menu-item">
                                                                <a class="dropdown__menu-link" href="#">Стеклоблоки</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown__menu-item">
                                                        <a class="dropdown__menu-link" href="#">Плиты пазогребные</a>
                                                    </li>
                                                    <li class="dropdown__menu-item">
                                                        <a class="dropdown__menu-link" href="#">Кирпич</a>
                                                    </li>
                                                    <li class="dropdown__menu-item">
                                                        <a class="dropdown__menu-link" href="#">Стеклоблоки</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown__menu-item">
                                                <a class="dropdown__menu-link" href="#">Плиты пазогребные</a>
                                            </li>
                                            <li class="dropdown__menu-item">
                                                <a class="dropdown__menu-link" href="#">Кирпич</a>
                                            </li>
                                            <li class="dropdown__menu-item">
                                                <a class="dropdown__menu-link" href="#">Стеклоблоки</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="dropdown">
                    <a class="nav-link dropdown-toggle dropdown-btn" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div>
                            <img src="{{ $currentStore->image_path ?? '' }}" alt="">
                            {{ $currentStore->company_name ?? 'Выберите магазин' }}
                        </div>
                        <img src="/svg/main/accordion-arrow.svg" alt="">
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($headerAllStores as $store)
                        <a class="dropdown-item" href="{{ route('store_main', $store->slug) }}">{{ $store->company_name }}</a>
                        <div class="dropdown-divider"></div>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                <form action="" class="form-inline">
                    <div class="input-group">
                        <input placeholder="Хочу найти нужный товар" type="text" class="form-control">
                        <div class="input-group-append">
                            <button class="btn btn-primary btn-search"><img src="/svg/main/search.svg" alt=""></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <div class="header-icons">
                    <a href="">
                        <img src="/svg/main/order.svg" alt="">
                    </a>
                    <a href="{{ route('favorites') }}">
                            <span id="favoritesCounter" class="{{ $headerFavoritesCount ? 'd-block' : 'd-none' }}">
                                {{ $headerFavoritesCount ?: '' }}
                            </span>
                        <img src="/svg/main/favorite.svg" alt="">
                    </a>

                    <div class="header-cart">
                            <span class="header-cart__price">
                                11 845 ₽
                            </span>
                        <a href="{{ route('cart') }}">
                                <span id="cartCounter" class="{{ $headerCartCount ? 'd-block' : 'd-none' }}">
                                    {{ $headerCartCount ?: '' }}
                                </span>
                            <img src="/svg/main/cart.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
