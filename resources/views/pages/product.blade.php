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
                <p class="product__description">{{ $product->description }}</p>
                <p class="product__price">{{ $product->price }} ₽</p>
                <form class="product-form" action="" data-id="{{ $product->id }}" data-sku="{{$product-> sku }}">
                    <button class="btn btn-success" type="submit">Добавить в корзину</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

<x-footer/>
