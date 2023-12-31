<x-header/>

<div class="container mt-3">
    <form id="checkout" class="checkout" method="POST" action="{{ route('place_order') }}">
        @csrf
        <div class="row">
            <div class="col-lg-8">
                <p class="checkout__h1 mb-4">Получатель</p>
                <div class="card-auth">
                    <div class="card-auth__body">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="name-n-surname">Имя и Фамилия</label>
                                <input id="name-n-surname" type="text"
                                       placeholder="Введите имя"
                                       class="form-control" name="fullName"
                                       value="{{ $user->name . ' ' . $user->surname }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email">e-mail</label>
                                <input id="email" type="email"
                                       placeholder="Введите e-mail"
                                       class="form-control" name="email"
                                       value="{{ $user->email }}" required autocomplete="email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="phone">Телефон</label>
                                <input id="phone" type="phone"
                                       placeholder="+7 (000) 000 00 00"
                                       class="form-control" name="phone"
                                       required autocomplete="phone" autofocus>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="checkout__h1 mb-4">Адрес доставки</p>
                <div class="card-auth">
                    <div class="card-auth__body">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="address">Адрес доставки</label>
                                <input id="address" type="text"
                                       placeholder="Введите адрес доставки"
                                       class="form-control" name="address"
                                       required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="position-sticky top-0">
                    <p class="checkout__h1 mb-4 d-flex justify-content-between align-items-end">
                        Ваш заказ <a href="{{ route('cart') }}">Изменить</a>
                    </p>
                    <div class="card-auth mb-0">
                        <div class="card-auth__body">
                            <div class="d-flex flex-wrap">
                                @foreach($products as $key => $product)
                                    @if($key <= 10)
                                        <img class="checkout__product" src="{{ $product->img_url }}" alt="">
                                    @endif
                                @endforeach
                            </div>
                            <p class="checkout__subtotal d-flex justify-content-between align-items-end">
                                Товары ({{ count($products) }}) <span>{{ $cartTotal / 100 }} ₽</span>
                            </p>
                            <p class="checkout__total d-flex justify-content-between align-items-end">
                                Итого <b>{{ $cartTotal / 100 }} ₽</b>
                            </p>
                            <button type="submit" class="btn btn-primary w-100 mb-4">Оформить заказ</button>
                            <p class="checkout__agreement mb-0 text-center">Нажимая кнопку «Оформить», я даю
                                <a target="_blank" href="{{ route('personal-data-agreement') }}">согласие</a> на
                                обработку персональных данных, в соответствии с
                                <a target="_blank" href="{{ route('personal-data-policy') }}">Политикой</a>, и
                                соглашаюсь с
                                <a target="_blank" href="{{ route('sale-regulations') }}">Правилами</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
</div>

<x-footer/>
