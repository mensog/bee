<x-header/>

<main id="content" role="main">

    <div class="container mt-3">
        <div class="row mb-8">
            <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
                    <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                        <li>
                            <div class="dropdown-title">Категории товаров {{ $categories->count() }}</div>
                        </li>
                        @foreach ($categories as $key => $category)
                            <li id="category_{{ $category->id }}">
                                <a class="dropdown-toggle dropdown-toggle-collapse"
                                   href="{{ route('category', $category->friendly_url_name) }}" role="button">
                                    {{ $category->name }} ({{ $category->products_count }})<span
                                        class="text-gray-25 font-size-12 font-weight-normal"></span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-xl-9 col-wd-9gdot5">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade pt-2 show active" id="pills-two-example1" role="tabpanel"
                         aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                        <ul class="row list-unstyled products-group no-gutters">
                            @foreach ($products as $key => $product)
                                <li id="product_{{ $product->id }}"
                                    class="col-6 col-md-3 col-wd-2gdot4 product-item {{$key + 1 % 4 ? 'remove-divider-md-lg remove-divider-xl' : ''}} {{ ($key + 1) % 5  === 0 ? 'remove-divider-wd' : '' }}">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                        href="{{ route('product', $product->friendly_url_name) }}"
                                                        class="font-size-12 text-gray-5">Категория товара</a>
                                                </div>
                                                <h5 class="mb-1 product-item__title"><a
                                                        href="{{ route('product', $product->friendly_url_name) }}"
                                                        class="text-blue font-weight-bold">{{ $product->name }}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{ route('product', $product->friendly_url_name) }}"
                                                       class="d-block text-center"><img
                                                            class="img-fluid" src="{{ $product->img_url }}"
                                                            alt="{{ $product->name }}"></a>
                                                </div>
                                                <p class="font-size-12 p-0 text-gray-110 mb-4">{{ Str::of($product->description)->limit(250, ' ...') }}</p>
                                                <div class="text-gray-20 mb-2 font-size-12">
                                                    SKU: {{ $product-> sku }}</div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">{{ $product->price / 100 }} руб</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="#"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="#" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-compare mr-1 font-size-15"></i> Сравнить</a>
                                                    <a href="#" class="text-gray-6 font-size-13"><i
                                                            class="ec ec-favorites mr-1 font-size-15"></i> В
                                                        избранное</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<x-footer/>
