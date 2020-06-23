<div id="cardBody" class="card-cart__body">
    @csrf
    @foreach ($products as $product)
        <div class="row">
            <div class="col-lg-2">
                <a href="{{ route('product', $product->friendly_url_name) }}"><img
                        class="img-fluid card-cart__img max-width-100"
                        src="{{$product->img_url}}" alt="{{$product->description}}"></a>
            </div>
            <div class="col-lg-5">
                <p class="card-cart__title">
                    <a href="{{ route('category', $product->friendly_url_name) }}"
                       class="text-gray-90">{{$product->name}}</a>
                </p>
                <p class="card-cart__sku">Артикул: {{ $product-> sku }}</p>
            </div>
            <div class="col-lg-5 card-cart__props">
                <div class="row">
                    <div class="col-lg-6 text-right col-12 card-cart__price">
                        <p>{{$product->price / 100}} руб</p>
                    </div>
                    <div class="col-lg-2 card-cart__qty">
                        <input data-quantity="{{$quantity[$product->id]}}"
                               data-id="{{$product->id}}" data-action="updateQuantity"
                               data-page="cart" class="form-control cart-qty text-center"
                               type="number"
                               value="{{$quantity[$product->id]}}">
                    </div>
                    <div class="col-lg-4 col-12 card-cart__delete">
                        <button type="button" data-id="{{$product->id}}" data-action="remove" data-page="cart"
                                class="change-cart">
                            <img class="img-fluid" src="/svg/trash.svg" alt="remove">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</div>
