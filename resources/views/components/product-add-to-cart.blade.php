@if($inCartQuantity === 0)
    <button data-id="{{ $productId }}" data-quantity="1"
            class="btn add-to-cart px-5 btn-primary-dark transition-3d-hover">
        <i class="ec ec-add-to-cart mr-2 font-size-20"></i> Добавить в корзину
    </button>
@else
    <div class="product-in-cart">
        <button class="btn px-5 btn-secondary mr-6">
            <i class="ec ec-shopping-bag mr-2 font-size-20"></i> В корзине
        </button>
        <div class="d-flex">
            <button class="btn transition-3d-hover mr-3">
                <svg class="d-block m-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     viewBox="0 0 16 16">
                    <path d="M0 7h16v2H0z"></path>
                </svg>
            </button>
            <input data-quantity="{{ $inCartQuantity }}"
                   data-id="{{ $productId }}" data-action="updateQuantity"
                   data-page="product" class="form-control cart-qty mr-3 w-20 text-center"
                   type="number"
                   value="{{ $inCartQuantity }}">
            <button class="btn transition-3d-hover">
                <svg class="d-block m-auto" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                     viewBox="0 0 16 16">
                    <path d="M7 0H9V7H16V9H9V16H7V9H0V7H7V0Z"></path>
                </svg>
            </button>
        </div>
    </div>
@endif
