<x-header/>

<body>
<div class="container">
    <h1>Страница категории - список товаров категории</h1>

    <p>
        Всего товаров: {{ $products->total() }}
    </p>
    <div class="row">
        @foreach ($products as $key => $product)
            <div class="col-lg-3 col-12">
                <a class="text-decoration-none" href="category/{{ $product->friendly_url_name }}">
                    <div id="category_{{ $product->id }}" data-sku="{{ $product-> sku }}"
                         class="card product-card mb-3">
                        <img src="{{ $product->img_url }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::of($product->description)->limit(70, ' ...') }}</p>

                            <p class="card-text">{{ $product->price }} руб</p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <p>
        Число страниц: {{ $products->lastPage() }}
    </p>
    <div class="row">
        <div class="col">
            {{ $products->links() }}
        </div>
    </div>
</div>
</body>

<x-footer/>
