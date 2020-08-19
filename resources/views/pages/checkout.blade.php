<x-header/>
<main id="content" role="main" class="checkout-page">
    <div class="breadcrumbs">
        <div class="container">
            <p class="breadcrumbs-block">
                <a class="breadcrumbs-block__link" href="{{ route('main') }}">Главная</a>
                /
                Корзина
            </p>
        </div>
    </div>
    <div class="container">
        <form id="checkout" class="form floating-label mb-0" method="POST" action="{{ route('place_order') }}">
            @csrf
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart">
                        <div class="cart__wrap">
                            <h2 class="cart__heading">Оформление заказа</h2>
                            <h3 class="cart__subheading">Город получения</h3>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-control-container">
                                        <input id="city" type="text"
                                               class="form-control @error('city') is-invalid @enderror"
                                               name="city" placeholder=" "
                                               value="{{ old('city') }}" required autocomplete="city">
                                        <label for="city">Введите город получения</label>
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <h3 class="cart__subheading">Данные получателя</h3>
                            <p class="cart__after-title">Полные фамилия, имя и отчество потребуются при получении
                                заказа</p>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-control-container">
                                        <input id="name-n-surname" type="text"
                                               class="form-control @error('fullName') is-invalid @enderror"
                                               name="fullName" placeholder=" "
                                               value="{{ old('fullName') }}" required autocomplete="name">
                                        <label for="name-n-surname">ФИО</label>
                                        @error('fullName')
                                        <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-control-container">
                                        <input id="phone" type="phone"
                                               class="form-control @error('phone') is-invalid @enderror"
                                               name="phone" placeholder=" "
                                               value="{{ old('phone') }}" required autocomplete="phone">
                                        <label for="phone">Телефон</label>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control-container">
                                        <input id="email" type="email"
                                               class="form-control @error('email') is-invalid @enderror"
                                               name="email" placeholder=" "
                                               value="{{ old('email') }}" required autocomplete="email">
                                        <label for="email">E-mail</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-control-container">
                                        <input id="address" type="text"
                                               class="form-control @error('address') is-invalid @enderror"
                                               name="address" placeholder=" "
                                               value="{{ old('address') }}" required autocomplete="address">
                                        <label for="address">Улица</label>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <div class="form-control-container">
                                        <input id="house" type="text"
                                               class="form-control"
                                               name="house" placeholder=" "
                                               value="{{ old('house') }}">
                                        <label for="house">Дом</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-control-container">
                                        <input id="apartment" type="text"
                                               class="form-control"
                                               name="apartment" placeholder=" "
                                               value="{{ old('apartment') }}">
                                        <label for="apartment">Квартира</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-control-container">
                                        <input id="floor" type="text"
                                               class="form-control"
                                               name="floor" placeholder=" "
                                               value="{{ old('floor') }}">
                                        <label for="floor">Этаж</label>
                                    </div>
                                </div>
                            </div>
                            <h3 class="cart__subheading">Дата и время доставки</h3>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-control-container">
                                        <input id="date" type="text"
                                               class="form-control"
                                               name="date" placeholder=" "
                                               value="{{ old('date') }}">
                                        <label for="date">Дата доставки</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control-container">
                                        <input id="time" type="text"
                                               class="form-control"
                                               name="time" placeholder=" "
                                               value="{{ old('time') }}">
                                        <label for="time">Время доставки</label>
                                    </div>
                                </div>
                            </div>
                            <h3 class="cart__subheading">Дополнительно</h3>
                            <p class="cart__after-title">Укажите данные, чтобы мы смогли быстрее доставить заказ</p>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="form-control-container">
                                        <input id="elevator" type="text"
                                               class="form-control"
                                               name="elevator" placeholder=" "
                                               value="{{ old('elevator') }}">
                                        <label for="elevator">Наличие лифта</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-control-container">
                                        <input id="intercom" type="text"
                                               class="form-control"
                                               name="intercom" placeholder=" "
                                               value="{{ old('intercom') }}">
                                        <label for="intercom">Код домофона</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-control-container">
                                        <textarea id="comment" type="text"
                                                  class="form-control"
                                                  rows="3"
                                                  name="comment" placeholder=" ">{{ old('comment') }}</textarea>
                                        <label for="comment">Комментарий к доставке</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="cart-aside">
                        <div class="checkout">
                            <h4 class="checkout__heading">Ваша корзина ({{ count($quantity) }})</h4>
                            <div class="checkout__wrap">
                                <span class="checkout__products">Товары:</span>
                                <span class="checkout__products-price">{{ $cartTotal / 100 }} ₽</span>
                            </div>
                            <div class="checkout__wrap">
                                <div class="checkout__box">
                                    <span class="checkout__weight">Вес:</span>
                                    <span class="checkout__weight-limit">Вес не больше 30 кг</span>
                                </div>
                                <span class="checkout__weight-total">45 кг</span>
                            </div>
                            <div class="checkout__wrap">
                                <span class="checkout__discount">Скидка:</span>
                                <span class="checkout__discount-price">− 413 ₽</span>
                            </div>
                            <div class="checkout__wrap">
                                <span class="checkout__total">Общая сумма:</span>
                                <span class="checkout__total-price">{{ $cartTotal / 100 }} ₽</span>
                            </div>
                            <button type="submit" class="checkout__btn btn btn-primary">
                                Оплатить онлайн
                            </button>
                        </div>
                        <div class="promocode">
                            <h4 class="promocode__heading">Введите промокод</h4>
                            <input class="promocode__input" type="text" placeholder="Промокод на скидку">
                            <button class="promocode__btn btn btn-empty">Применить промокод</button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</main>
<x-footer/>
