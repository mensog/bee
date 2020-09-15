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
                                <x-star-rating rating="{{ $product->getRating() }}" class="product-card-info-header__rating" />

                                <span class="product-card-info-header__score">{{ number_format($product->getRating(), 1) }}</span>

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
                                    <a target="_blank" href="{{ $product->getStoreProductLink() }}"><img src="/svg/product/search.svg" alt=""> Проверить цену в {{ $product->store->full_name }}</a>
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
                                От 45 минут
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
                        <div class="col-lg-8 col-12">
                            @if($product->reviews->count() > 0)
                            <h4>Отзывы</h4>
                                <x-star-rating rating="{{ $product->getRating() }}" class="comments-card__rating" />
                                <span class="comments-card__score">{{ number_format($product->getRating(), 1) }}</span>
                                <span class="comments-card__count">({{ $product->reviews->count() }})</span>
                            @else
                                <h4>Отзывов пока нет, оцените товар первым!</h4>
                            @endif
                        </div>
                        @can('createReview', $product)
                        <div class="col-lg-4 col-12">
                            <button class="btn btn-outline-black">Оставить отзыв</button>
                        </div>
                        @endcan
                    </div>
                    @can('createReview', $product)
                        <div class="row mt-3">
                            <div class="col-12">
                            <form method="post" action="{{ route('add_review', ['id' => $product->id]) }}">
                                @csrf
                                <input class="form-control" name="rating">
                                <textarea id="advantages" type="text" class="form-control" rows="3" name="advantages" placeholder=" ">{{ old('advantages') }}</textarea>
                                <label for="advantages">Достоинства</label>
                                <textarea id="disadvantages" type="text" class="form-control" rows="3" name="disadvantages" placeholder=" ">{{ old('disadvantages') }}</textarea>
                                <label for="disadvantages">Недостатки</label>
                                <textarea id="comment" type="text" class="form-control" rows="3" name="comment" placeholder=" ">{{ old('comment') }}</textarea>
                                <label for="comment">Комментарий</label>
                                <button class="btn btn-primary" type="submit">Отправить</button>
                            </form>
                            </div>
                        </div>
                    @endcan
                </div>
                <div class="comments-card__body">
                    <div class="comments-list">
                        @foreach($product->reviews as $review)
                        <div class="comment">
                            <div class="comment__header">
                                <img class="comment__img" src="/svg/product/user.svg" alt="">
                                <div>
                                    <p>{{ $review->user->full_name }} <span>{{ date('d.m.Y', strtotime($review->created_at)) }}</span></p>
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
                                    <p>{{ $review->advantages }}</p>
                                </div>
                                <div class="comment__text">
                                    <p>Недостатки:</p>
                                    <p>{{ $review->disadvantages }}</p>
                                </div>
                                <div class="comment__text">
                                    <p>Комментарий:</p>
                                    <p>{{ $review->comment }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <button class="btn btn-outline-black">Показать все отзывы</button>
                </div>
            </div>
        </div>
    </div>

    <x-delivery/>

</main>

<x-footer/>

