<x-header/>

<main id="content" role="main" class="cart-page">
    <div class="container mt-3">
        <div class="mb-4">
            <h1 class="text-center">Корзина</h1>
        </div>
        <div class="mb-10 cart-table">
            @if(count($products) !== 0)
                <div class="card-cart">
                    <x-cart :products="$products" :quantity="$quantity"/>
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
                                                                class="d-none d-md-inline">Оформить заказ</span>
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
                                        <p>12456 руб</p>
                                    </div>
                                    <div class="col-lg-2 card-cart-total__qty">
                                        <p>10</p>
                                    </div>
                                    <div class="col-lg-4 col-12 card-cart-total__delete">
                                        <button type="button" data-action="clear" data-page="cart" class="btn btn-primary">
                                            Очистить корзину
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
        </div>
    </div>
</main>

<x-footer/>
