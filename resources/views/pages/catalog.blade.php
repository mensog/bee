<x-header/>

<main id="content" class="bg-white" role="main">

    <div class="delivery">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="{{ route('main') }}">Главная</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="{{ route('store_main', ['storeSlug' => $store->slug]) }}">{{ $store->company_name }}</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="{{ route('catalog', ['storeSlug' => $store->slug]) }}">Каталог</a></li>
                @foreach($breadcrumbs as $key => $crumb)
                    @if($loop->last)
                        @break
                    @endif
                    <li class="breadcrumb__item">/</li>
                    <li class="breadcrumb__item"><a class="breadcrumb__link" href="{{ route('category',['storeSlug' => $store->slug , 'name'=> $key]) }}">{{ $crumb }}</a></li>
                @endforeach
            </ul>
            <div class="delivery__box">
                <img class="delivery__box-img" src="{{ $store->image_path }}" alt="">
                <h3 class="delivery__box-title"><span>Доставка из</span>{{ $store->company_name }}</h3>
            </div>
        </div>
    </div>

    <div class="catalog">
        <div class="container">
            <h3 class="catalog__title">{{ (is_null($currentCategory)) ? 'Каталог' : $currentCategory->name }}</h3>
            <div class="row">
                <div class="col-lg-3">
                    <div class="catalog__aside">
                        <div class="catalog__subtitle subtitle">Категории</div>

                        @isset($storeCatalog)
                            <x-category-sidebar :categories="$storeCatalog" :store="$store" :activeCategorySlugs="$activeCategorySlugs"/>
                        @endisset
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
                            @isset($currentCategory)
                                @isset($storeCatalog[$currentCategory->id])
                                    @foreach($storeCatalog[$currentCategory->id] as $cat)
                                        <button class="tabs__control-btn">{{  $cat->name }}</button>
                                    @endforeach
                                @endisset
                            @else
                                @isset($storeCatalog[''])
                                    @foreach($storeCatalog[''] as $cat)
                                        <button class="tabs__control-btn">{{  $cat->name }}</button>
                                    @endforeach
                                @endisset
                            @endisset
                        </div>
                        <div class="tabs__sort">
                            <div class="tabs__sort-quantity">{{ $products->total() }} {{ Lang::choice('товар|товара|товаров', $products->total(), [], 'ru') }}</div>
                            <div class="tabs__sort-filter">
                                Сортировать: <span>по популярности</span>
                                <img src="/svg/catalog/sort-icon.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="product">
                        <div class="row">
                            @foreach ($products as $key => $product)
                                <div class="col-lg-4">
                                    <div id="product_{{ $product->id }}" class="product__item">
                                        <a href="{{ route('product', ['storeSlug' => $product->store->slug, 'name' => $product->friendly_url_name]) }}">
                                            <div class="product__item-img">
                                                <img src="{{ $product->img_url }}" alt="{{ $product->name }}">
                                            </div>
                                        </a>
                                        @if(in_array($product->id, $favoritesListContent, true))
                                            <button data-id="{{ $product->id }}" data-action="remove"
                                                    class="btn-add-to-favorites product__item-favorite add-to-favorites p-0 text-gray-6 font-size-13">
                                                <i class="ec heart font-size-15"></i>
                                            </button>
                                        @else
                                            <button data-id="{{ $product->id }}" data-action="add"
                                                    class="btn-add-to-favorites product__item-favorite add-to-favorites p-0 text-gray-6 font-size-13">
                                                <i class="ec ec-favorites font-size-15"></i>
                                            </button>
                                        @endif
                                        <a href="{{ route('product', ['storeSlug' => $product->store->slug, 'name' => $product->friendly_url_name]) }}">
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
                                </div>
                            @endforeach
                        </div>
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-delivery/>

</main>

<x-footer/>
