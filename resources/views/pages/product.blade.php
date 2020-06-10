<x-header/>

<body>
<div class="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12">
                <img class="product__img" src="{{ $product->img_url }}" alt="{{ $product->name }}">
            </div>
            <div class="col-lg-8 col-12">
                <h1 class="product__title">{{ $product->name }}</h1>
                <p class="product__breadcrumbs"><a href="{{ route('category', $product->category->friendly_url_name) }}">{{$product->category->name}}/{{ $product->name }}</a></p>
                <p class="product__description">Артикул: {{ $product-> sku }}</p>
                <p class="product__description">{{ $product->description }}</p>
                <p class="product__price">{{ $product->price / 100 }} ₽</p>
                <p class="product__weight">Вес: {{ $product->weight / 1000 }} кг</p>
                <form class="product-form" action="{{route('add_to_cart')}}" data-id="{{ $product->id }}">
                    <input type="hidden" name="product-id" value="{{ $product->id }}">
                    <input type="hidden" name="quantity" value="1">
                    <button class="btn btn-success" type="submit">Добавить в корзину</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

<x-footer/>
