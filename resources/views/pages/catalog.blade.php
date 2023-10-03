<x-header />

<main id="content" role="main">
    <div class="delivery">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">{{ __('loc.catalog_dashboard.home') }}</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">{{ __('loc.catalog_dashboard.lerua') }}</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">{{ __('loc.catalog') }}</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">{{ __('loc.catalog_dashboard.build') }}</a></li>
            </ul>
            <div class="delivery__box">
                <img class="delivery__box-img" src="/img/catalog/leroy-merlin-logo.png" alt="">
                <h3 class="delivery__box-title"><span>{{ __('loc.catalog_dashboard.delivery') }}</span>{{ __('loc.catalog_dashboard.lerua') }}</h3>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="container">
            <h3 class="catalog__title">{{ __('loc.catalog_dashboard.build') }}</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="catalog__aside">
                        <div class="catalog__subtitle">Категории</div>
                        <ul class="catalog__list">
                            <li class="catalog__list-item">
                                <a class="catalog__list-link" href="#">{{ __('loc.catalog_dashboard.build') }}</a>
                                <ul class="catalog__sublist">
                                    <li class="catalog__sublist-item">
                                        <a class="catalog__sublist-link" href="#">Расходные материалы</a>
                                        <ul class="catalog__dropdown">
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Сухие смеси и грунтовка</a>
                                            </li>
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Листовые материалы</a>
                                            </li>
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Блоки для строительства</a>
                                            </li>
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Водосточные и дренажные системы
                                                </a>
                                            </li>
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Металлопрокат</a>
                                            </li>
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Изоляционные материалы</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tabs">
                        <div class="tabs__control">
                            <button class="tabs__control-btn">Расходные материалы</button>
                            <button class="tabs__control-btn">Бензокосилки</button>
                            <button class="tabs__control-btn">Краски</button>
                            <button class="tabs__control-btn">Напольные покрытие</button>
                            <button class="tabs__control-btn">Освещение</button>
                            <button class="tabs__control-btn">Хранение и хозтовары</button>
                            <button class="tabs__control-btn">Отопление, охлаждение, водоснабжение и вентиляция</button>
                        </div>
                        <div class="tabs__sort">
                            <div class="tabs__sort-quantity">Кол-во товаров: {{ $products->count() }}</div>
                            <div class="tabs__sort-filter">
                                Сортировать: <span>по популярности</span>
                                <img src="svg/catalog/sort-icon.svg" alt="">
                            </div>
                        </div>
                        <div class="tabs__content">
                            @foreach ($products as $key => $product)
                            <div id="product_{{ $product->id }}" class="tabs__content-item">
                                <a href="{{ route('product', $product->friendly_url_name) }}">
                                    <div class="tabs__content-img">
                                        <img src="{{ $product->img_url }}" alt="{{ $product->name }}">
                                    </div>
                                </a>
                                <a href="{{ route('product', $product->friendly_url_name) }}">
                                    <div class="tabs__content-descr">{{ $product->name }}</div>
                                    <div class="tabs__content-article">{{ $product->sku }}</div>
                                    <div class="tabs__content-price">
                                        <span>{{ $product->price / 100 }} ₽</span>/ за 1 шт
                                    </div>
                                </a>
                                @if(isset($cartContent[$product->id]))
                                <button data-id="{{ $product->id }}" data-quantity="1" class="tabs__content-btn btn">
                                    В корзине
                                </button>
                                @else
                                <button data-id="{{ $product->id }}" data-quantity="1" class="tabs__content-btn btn add-to-cart">
                                    В корзину
                                </button>
                                @endif
                            </div>
                            @endforeach
                        </div>
                    {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<x-footer />