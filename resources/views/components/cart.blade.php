@if(count($products) !== 0)
    <div id="cart" class="card-cart">
        <div class="card-cart__body">
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
                                <p class="card-cart__price-total">{{$product->price / 100}} ₽</p>
                                @if($quantity[$product->id] > 1)
                                    <p>{{($product->price / 100) / $quantity[$product->id]}} ₽/шт.</p>
                                @endif
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
        <div class="card-cart__footer">
            <div class="row">
                <div class="col-lg-7">
                    <form action="{{ route('checkout') }}" method="post">
                        <div class="pt-md-3">
                            <div class="d-block d-md-flex flex-center-between">
                                <div class="mb-3 mb-md-0 w-xl-80">
                                    <label class="sr-only" for="subscribeSrEmail">E-mail</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="email"
                                               id="subscribeSrEmail" placeholder="Введите e-mail"
                                               aria-label="email" aria-describedby="subscribeButton"
                                               required>
                                        <div class="input-group-append">
                                            <button class="btn btn-block btn-dark px-4" type="submit"
                                                    id="subscribeButton"><i
                                                    class="fas fa-tags d-md-none"></i><span
                                                    class="d-none d-md-inline">Заказ в 1 клик</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 card-cart-total">
                    <div class="row">
                        <div class="col-lg-6 col-12 card-cart-total__price">
                            <p class="card-cart-total__title">Итого:</p>
                            <p>12456 ₽</p>
                        </div>
                        <div class="col-lg-6 col-12 card-cart-total__delete">
                            <button type="button" class="btn btn-success">
                                Оформить доставку
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@else
    <div>
        <p class="text-center font-size-36">Сейчас корзина пуста</p>
        <p class="text-center font-size-36">Перейти в <a href="{{route('catalog')}}">каталог</a></p>
    </div>
@endif
