<x-header />

<main id="content" role="main">

    <div class="delivery">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Главная</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Леруа Мерлен</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Каталог</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Строительство и ремонт</a></li>
            </ul>
            <div class="delivery__box">
                <img class="delivery__box-img" src="/img/catalog/leroy-merlin-logo.png" alt="">
                <h3 class="delivery__box-title"><span>Доставка из</span>Леруа Мерлен</h3>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="container">
            <h3 class="catalog__title">Строительство и ремонт</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="catalog__aside">
                        <div class="catalog__subtitle subtitle">Категории</div>
                        <ul class="catalog__list">
                            <li class="catalog__list-item">
                                <a class="catalog__list-link" href="#">Строительство и ремонт</a>
                                <ul class="catalog__sublist">
                                    <li class="catalog__sublist-item">
                                        <a class="catalog__sublist-link" href="#">Расходные материалы</a>
                                        <ul class="catalog__dropdown">
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Сухие смеси и грунтовка</a>
                                            </li>
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Листовые материалы</a></li>
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Блоки для строительства</a>
                                            </li>
                                            <li class="catalog__dropdown-item">
                                                <a class="catalog__dropdown-link" href="#">Водосточные и дренажные
                                                    системы
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
                        <div class="price-filter">
                            <h4 class="price-filter__title subtitle">Цена</h4>
                            <div class="price-filter__wrap">
                                <div class="price-filter__box">
                                    <span>от</span>
                                    <input type="text" placeholder="0 ₽">
                                </div>
                                <div class="price-filter__box">
                                    <span>до</span>
                                    <input type="text" placeholder="112 220 ₽">
                                </div>
                            </div>
                        </div>
                        <div class="checkboxes">
                            <h4 class="checkboxes__subtitle subtitle">Материал</h4>
                            <div class="checkboxes__wrap">
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="gypsum">
                                    <label for="gypsum">Гипс</label>
                                </div>
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="сoncrete">
                                    <label for="сoncrete">Бетон</label>
                                </div>
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="steel">
                                    <label for="steel">Сталь</label>
                                </div>
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="aluminum">
                                    <label for="aluminum">Алюминий</label>
                                </div>
                            </div>
                        </div>
                        <div class="checkboxes">
                            <h4 class="checkboxes__subtitle subtitle">Материал</h4>
                            <div class="checkboxes__wrap">
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="axton">
                                    <label for="axton">AXTON</label>
                                </div>
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="knauf">
                                    <label for="knauf">Knauf</label>
                                </div>
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="ceresit">
                                    <label for="ceresit">Ceresit</label>
                                </div>
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="moment">
                                    <label for="moment">Момент</label>
                                </div>
                            </div>
                        </div>
                        <div class="checkboxes">
                            <h4 class="checkboxes__subtitle subtitle">Специальные условия</h4>
                            <div class="checkboxes__wrap">
                                <div class="checkboxes__item">
                                    <input type="checkbox" id="discounts">
                                    <label for="discounts">Скидки</label>
                                </div>
                            </div>
                        </div>
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
                            <div class="tabs__sort-quantity">39 товаров</div>
                            <div class="tabs__sort-filter">
                                Сортировать: <span>по популярности</span>
                                <img src="svg/catalog/sort-icon.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="row">
                            @foreach ($products as $key => $product)
                                <div class="col-lg-4">
                                    <a href="#">
                                        <div id="product_{{ $product->id }}" class="product__item">
                                            <a href="{{ route('product', $product->friendly_url_name) }}">
                                                <div class="product__item-favorite">
                                                    <img src="svg/catalog/heart.svg" alt="">
                                                </div>
                                                <div class="product__item-img">
                                                    <img src="{{ $product->img_url }}" alt="{{ $product->name }}">
                                                </div>
                                            </a>
                                            <a href="{{ route('product', $product->friendly_url_name) }}">
                                                <div class="product__item-descr">{{ $product->name }}</div>
                                                <div class="product__item-article">{{ $product->sku }}</div>
                                                <div class="product__item-price">
                                                    <span>{{ $product->price / 100 }} ₽</span>/ за 1 шт
                                                </div>
                                            </a>
                                            @if (isset($cartContent[$product->id]))
                                                <button data-id="{{ $product->id }}" data-quantity="1"
                                                    class="product__item-btn btn">
                                                    В корзине
                                                </button>
                                            @else
                                                <button data-id="{{ $product->id }}" data-quantity="1"
                                                    class="product__item-btn btn add-to-cart">
                                                    В корзине
                                                </button>
                                            @endif
                                        </div>
                                    </a>
                                </div>
                            @endforeach

                            <div class="col-lg-4">
                                <a href="#">
                                    <div class="product__item">
                                        <div class="product__item-img">
                                            <img src="img/catalog/product/img-2.png" alt="">
                                        </div>
                                        <div class="product__item-favorite">
                                            <img src="svg/catalog/heart.svg" alt="">
                                        </div>
                                        <div class="product__item-descr">Штукатурка гипсовая Axton 5 <br> кг</div>
                                        <div class="product__item-article">81946334</div>
                                        <div class="product__item-price"><span>416 ₽</span>/ за 1 шт</div>
                                        <button class="product__item-btn btn">В корзину</button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <div class="product__item">
                                        <div class="product__item-favorite">
                                            <img src="svg/catalog/heart.svg" alt="">
                                        </div>
                                        <div class="product__item-img">
                                            <img src="img/catalog/product/img-1.png" alt="">
                                        </div>
                                        <div class="product__item-descr">Штукатурка гипсовая Axton 5 <br> кг</div>
                                        <div class="product__item-article">81946334</div>
                                        <div class="product__item-price"><span>416 ₽</span>/ за 1 шт</div>
                                        <button class="product__item-btn btn">В корзину</button>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <div class="product__item">
                                        <div class="product__item-favorite">
                                            <img src="svg/catalog/heart.svg" alt="">
                                        </div>
                                        <div class="product__item-img">
                                            <img src="img/catalog/product/img-2.png" alt="">
                                        </div>
                                        <div class="product__item-descr">Штукатурка гипсовая Axton 5 <br> кг</div>
                                        <div class="product__item-article">81946334</div>
                                        <div class="product__item-price"><span>416 ₽</span>/ за 1 шт</div>
                                        <button class="product__item-btn btn">В корзину</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-delivery/>

</main>

<x-footer />
