<x-header/>

<main id="content" role="main">
    <div class="container mt-3">
        <div class="mb-xl-14 mb-6">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <img class="product__img" src="{{ $product->img_url }}" alt="{{ $product->name }}">
                </div>
                <div class="col-md-7 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                            <a href="{{ route('category', $product->category->friendly_url_name) }}"
                               class="font-size-12 text-gray-5 mb-2 d-inline-block">{{$product->category->name}}/{{ $product->name }}</a>
                            <h2 class="font-size-25 text-lh-1dot2">{{ $product->name }}</h2>
                        </div>
                        <p>{{ $product->description }}</p>
                        <p>Артикул: {{ $product-> sku }}</p>
                        <div class="mb-4">
                            <div class="d-flex align-items-baseline">
                                <ins class="font-size-36 text-decoration-none">{{ $product->price / 100 }} руб</ins>
                            </div>
                        </div>
                        <div class="mb-3">
                            <a href="{{route('add_to_cart', ['product-id' => $product->id, 'quantity' => 1] )}}" class="btn px-5 btn-primary-dark transition-3d-hover"><i
                                    class="ec ec-add-to-cart mr-2 font-size-20"></i> Добавить в корзину</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<x-footer/>
