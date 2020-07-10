<x-header/>

<main id="content" role="main">
    <div class="container mt-3">
        <div class="mb-xl-14 mb-6">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img class="product__img img-fluid" src="{{ $product->img_url }}" alt="{{ $product->name }}">
                </div>
                <div class="col-md-7 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                            <a href="{{ route('category', $product->category->friendly_url_name) }}"
                               class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$product->category->name}}
                                /{{ $product->name }}</a>
                            <h2 class="text-lh-1dot2 d-flex justify-content-between">
                                {{ $product->name }}
                                @if($inFavoritesList)
                                    <button data-id="{{ $product->id }}" data-action="remove"
                                            class="btn-add-to-favorites add-to-favorites btn btn-link pl-0 text-gray-6 font-size-13">
                                        <i class="ec heart mr-1 font-size-15"></i>
                                    </button>
                                @else
                                    <button data-id="{{ $product->id }}" data-action="add"
                                            class="btn-add-to-favorites add-to-favorites btn btn-link pl-0 text-gray-6 font-size-13">
                                        <i class="ec ec-favorites mr-1 font-size-15"></i>
                                    </button>
                                @endif
                            </h2>
                            @if($storeName)
                                <a href="{{$storeLink}}"><h3 class="font-size-16">{{$storeName}}</h3></a>
                            @endif
                        </div>
                        <p>{{ $product->description }}</p>
                        <p>Артикул: {{ $product-> sku }}</p>
                        <div class="mb-4">
                            <div class="d-flex align-items-baseline">
                                <ins class="font-size-36 text-decoration-none">{{ $product->price / 100 }} руб</ins>
                            </div>
                        </div>
                        <div class="mb-3">
                            <x-product-add-to-cart :inCartQuantity="$inCartQuantity" :productId="$product->id"/>
                        </div>
                        @if($attributes && count($attributes) !== 0)
                            <div class="product-props">
                                <p class="product-props__header font-size-25">Характеристики</p>
                                <div class="product-props-group">
                                    @foreach($attributes as $attribute)
                                        <div class="product-props-group__item">
                                            <p class="product-props-group__title">{{$attribute->name}}</p>
                                            <p class="product-props-group__desc">{{$attribute->value}}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<x-footer/>
