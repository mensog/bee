<x-header/>

<main id="content" class="product-page" role="main">

    <div class="breadcrumbs">
        <div class="container">
            <p class="breadcrumbs-block">
                <a class="breadcrumbs-block__link" href="{{ route('main', ['storeSlug' => $product->store->slug]) }}">Главная</a>
                /
                <a class="breadcrumbs-block__link"
                   href="{{ route('store_main', ['storeSlug' => $product->store->slug]) }}">{{ $product->store->company_name }}</a>
                /
                <a class="breadcrumbs-block__link"
                   href="{{ route('catalog', ['storeSlug' => $product->store->slug]) }}">Каталог</a>
                /
                @foreach($categoryBreadcrumbs as $url => $catName)
                    <a class="breadcrumbs-block__link"
                       href="{{ route('category', ['name' => $url, 'storeSlug' => $product->store->slug]) }}">
                        {{ $catName }}
                    </a>
                    /
                @endforeach
                {{ $product->name }}
            </p>
        </div>
    </div>

    <div class="product">
        <div class="container">
            <div class="product-card">
                <div class="product-card__body">

                    <div class="product-card-gallery">
                        <img class="product-card-gallery__image" src="{{ $product->img_url }}"
                             alt="{{ $product->name }}">
                        <div class="product-card-gallery-images">
                            <div class="product-card-gallery-images__item">

                            </div>
                            <div class="product-card-gallery-images__item active">

                            </div>
                            <div class="product-card-gallery-images__item">

                            </div>
                            <div class="product-card-gallery-images__item">

                            </div>
                        </div>
                    </div>

                    <div class="product-card-info">
                        <div class="product-card-info-header">
                            <h3>
                                {{ $product->name }}
                            </h3>

                            <div>
                                <div class="product-card-info-header__rating">
                                    <a href="">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                                  fill="#F78C07"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                                  fill="#F78C07"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                                  fill="#F78C07"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                                  fill="#F78C07"/>
                                        </svg>
                                    </a>
                                    <a href="">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                                  fill="#E3E3E3"/>
                                        </svg>
                                    </a>
                                </div>

                                <span class="product-card-info-header__score">4.0</span>

                                <span class="product-card-info-header__sku">| Артикул: {{ $product-> sku }}</span>
                            </div>
                            <hr>
                        </div>

                        <div class="product-card-info-body">
                            <div class="product-card-info-body-props">
                                <header>
                                    О товаре
                                </header>

                                <ul class="props-list">
                                    @if(isset($attributes) && is_array($attributes) && count($attributes) > 0)
                                        @foreach($attributes as $attribute)
                                            @if ($loop->index <= 5)
                                                <li>
                                                    <p>{{ $attribute['name'] }}</p>
                                                    <p>{{ $attribute['value'] }}</p>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                </ul>

                                <a href="#description">
                                    <img src="/svg/product/description.svg" alt=""> Перейти к описанию
                                </a>
                            </div>

                            <div class="product-card-info-body-cart">
                                <div class="product-card-info-body-cart__price">
                                    <p>{{ $product->price / 100 }} ₽ <span>/за шт</span></p>
                                    <a href="{{ $product->getStoreProductLink() }}"><img src="/svg/product/search.svg" alt=""> Проверить цену в {{ $product->store->full_name }}</a>
                                </div>
                                <x-product-add-to-cart :inCartQuantity="$inCartQuantity" :productId="$product->id"/>
                                @if($inFavoritesList)
                                    <button data-id="{{ $product->id }}" data-action="remove"
                                            class="btn-add-to-favorites add-to-favorites btn btn-outline-black"
                                            style="max-width: 100%">
                                        В избранном
                                    </button>
                                @else
                                    <button data-id="{{ $product->id }}" data-action="add"
                                            class="btn-add-to-favorites add-to-favorites btn btn-outline-black"
                                            style="max-width: 100%">
                                        В избранное
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>

                <div class="product-card__footer">
                    <div class="product-card-requirements">
                        <div class="product-card-requirements__item  product-card-requirements__delivery">
                            <img src="{{ $product->store->image_path }}" alt="">
                            <p>
                                <small>Доставка из:</small>
                                {{ $product->store->company_name }}
                            </p>
                        </div>
                        <div class="product-card-requirements__item">
                            <img src="/svg/product/price.svg" alt="">
                            <p>
                                <small>Ближайшее время доставки</small>
                                В течение 45 минут
                            </p>
                        </div>
                        <div class="product-card-requirements__item">
                            <img src="/svg/product/price.svg" alt="">
                            <p>
                                <small>Сумма заказа</small>
                                от 1 000 Р
                            </p>
                        </div>
                        <div class="product-card-requirements__item">
                            <img src="/svg/product/weight.svg" alt="">
                            <p>
                                <small>Вес заказа</small>
                                до 30 кг
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="description" class="product-description">
        <div class="container">
            <div class="product-description-card">
                <h4 class="product-description-card__header">О товаре</h4>
                <p class="product-description-card__description">{{ $product->description }}</p>
                @if(isset($attributes) && is_array($attributes) && count($attributes) > 0)
                    <h4 class="product-description-card__header">Характеристики</h4>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <ul class="props-list">
                                @foreach($attributes as $key => $attribute)
                                    <li>
                                        <p>{{ $attribute['name'] }}</p>
                                        <p>{{ $attribute['value'] }}</p>

                                    </li>
                                    @if($key + 1 === (int) round(count($attributes) / 2))
                            </ul>
                        </div>
                        <div class="col-lg-6 col-12">
                            <ul class="props-list">
                            @endif
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <div class="comments">
        <div class="container">
            <div class="comments-card">
                <div class="comments-card__header">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <h4>Отзывы</h4>
                            <div class="comments-card__rating">
                                <a href="">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                              fill="#F78C07"/>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                              fill="#F78C07"/>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                              fill="#F78C07"/>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                              fill="#F78C07"/>
                                    </svg>
                                </a>
                                <a href="">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M10.8931 13.2222C10.7825 13.2222 10.6712 13.1964 10.569 13.1434L6.99965 11.2851L3.43101 13.1434C3.1944 13.2655 2.9088 13.2445 2.6946 13.0883C2.479 12.932 2.37189 12.6677 2.41739 12.4061L3.0971 8.48022L0.213068 5.70045C0.0212655 5.5156 -0.0480354 5.23797 0.0338656 4.98406C0.115767 4.73154 0.334869 4.54669 0.599472 4.50902L4.58952 3.93144L6.37314 0.355755C6.60974 -0.118585 7.39025 -0.118585 7.62686 0.355755L9.41048 3.93144L13.4005 4.50902C13.6651 4.54669 13.8842 4.73154 13.9661 4.98406C14.048 5.23797 13.9787 5.5156 13.7869 5.70045L10.9029 8.48022L11.5826 12.4061C11.6281 12.6677 11.5203 12.932 11.3054 13.0883C11.1836 13.1776 11.0387 13.2222 10.8931 13.2222"
                                              fill="#E3E3E3"/>
                                    </svg>
                                </a>
                            </div>
                            <span class="comments-card__score">4.0</span>
                            <span class="comments-card__count">(15)</span>
                        </div>
                        <div class="col-lg-6 col-12">
                            <button class="btn btn-outline-black">Оставить отзыв</button>
                        </div>
                    </div>
                </div>

                <div class="comments-card__body">
                    <div class="comments-list">
                        <div class="comment">
                            <div class="comment__header">
                                <img class="comment__img" src="/svg/product/user.svg" alt="">
                                <div>
                                    <p>Артем Иванов <span>23.01.2020</span></p>
                                    <div class="comment__rating">
                                        <img src="/svg/product/star.svg" alt="">
                                        <img src="/svg/product/star.svg" alt="">
                                        <img src="/svg/product/star.svg" alt="">
                                        <img src="/svg/product/star.svg" alt="">
                                        <img src="/svg/product/star.svg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="comment__body">
                                <div class="comment__text">
                                    <p>Достоинства</p>
                                    <p>Суперский</p>
                                </div>
                                <div class="comment__text">
                                    <p>Недостатки:</p>
                                    <p>За время использования не обнаружил.
                                        (когда выбирал еще из кучи моделей - везде часто писали о коротком шнуре,не
                                        считаю это проблемой, воткнул положил рядом где нибудь, зачем кому то +100500
                                        метров не понимаю)</p>
                                </div>
                                <div class="comment__text">
                                    <p>Комментарий:</p>
                                    <p>Это мой первый внешний жесткий, поэтому сравнивать не с чем, но покупкой
                                        однозначно доволен! работает через ноутбук Sony Vaio usb2.0
                                        копирование/перемещение с него ~30-40мб, в обратном ~20-30мб</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-outline-black">Показать все отзывы</button>
                </div>
            </div>
        </div>
    </div>

    <x-delivery/>

</main>

<x-footer/>

