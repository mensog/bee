<div class="cart-aside">
    <div class="checkout">
        <h4 class="checkout__heading">Ваша корзина ({{ count($quantity) }})</h4>
        <div class="checkout__wrap">
            <span class="checkout__products">Товары:</span>
            <span class="checkout__products-price">{{ $cartTotal / 100 }} ₽</span>
        </div>
        <div class="checkout__wrap">
            <span class="checkout__products">Доставка:</span>
            <span class="checkout__products-price">{{ $delivery->price / 100 }} ₽</span>
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
            <span class="checkout__total-price">{{ $cartTotal / 100 + $delivery->price / 100 }} ₽</span>
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
