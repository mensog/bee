<div class="cart-aside">
    <div class="checkout">
        <h4 class="checkout__heading">Ваша корзина ({{ count($quantity) }})</h4>
        <div class="checkout__wrap">
            <span class="checkout__products">Товары:</span>
            <span class="checkout__products-price">{{ $cartTotal / 100 }} ₽</span>
        </div>
        <div class="checkout__wrap">
            <span class="checkout__products">Доставка:</span>
            @if(env('FREE_FIRST_DELIVERY_ENABLED', 0) && $hasNoOrders)
                <span class="checkout__products-price"><del class="text-muted">{{ $delivery->price / 100 }} ₽</del> 0 ₽</span>
            @else
            <span class="checkout__products-price">{{ $delivery->price / 100 }} ₽</span>
            @endif
        </div>
        <div class="checkout__wrap">
            <div class="checkout__box">
                <span class="checkout__weight">Вес:</span>
                <span class="checkout__weight-limit">Вес не больше 30 кг</span>
            </div>
            <span class="checkout__weight-total">45 кг</span>
        </div>
        @if($bonusDiscount > 0)
        <div class="checkout__wrap">
            <span class="checkout__discount">Скидка:</span>
            <span class="checkout__discount-price">{{ $bonusDiscount / 100 }} ₽</span>
        </div>
        @endif
        <div class="checkout__wrap">
            <span class="checkout__total">Общая сумма:</span>
            @if(env('FREE_FIRST_DELIVERY_ENABLED', 0) && $hasNoOrders)
            <span class="checkout__total-price">{{ $cartTotal / 100 }} ₽</span>
            @else
            <span class="checkout__total-price">{{ $cartTotal / 100 + $delivery->price / 100 - $bonusDiscount / 100 }} ₽</span>
            @endif
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
    <div class="promocode">
        <h4 class="promocode__heading">Бонусный счет</h4>
        @if($bonusDiscount > 0)
            <p>Вы применили <b>{{ $bonusDiscount / 100 }}</b> {{ Lang::choice('бонус|бонуса|бонусов', $bonusDiscount / 100, [], 'ru') }}</p>
            <button class="promocode__btn btn btn-empty remove-bonus">Отменить применение бонусов</button>
        @else
            <p>Вам доступно <b>{{ $privateAccount->getTotalAmount() / 100 }}</b> {{ Lang::choice('бонус|бонуса|бонусов', $privateAccount->getTotalAmount(), [], 'ru') }}</p>
            <input class="promocode__input" type="text" name="bonusesToAdd" placeholder="Сколько бонусов применить">
            <button class="promocode__btn btn btn-empty add-bonus">Применить бонусы</button>
        @endif
    </div>
</div>
