<x-header/>

<main id="content" role="main" class="cart-page">
    <div class="breadcrumbs">
        <div class="container">
            <p class="breadcrumbs-block">
                <a class="breadcrumbs-block__link" href="{{ route('main') }}">Главная</a>
                /
                Корзина
            </p>
        </div>
    </div>

    <div class="cart">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="cart__wrap">
                        <h2 class="cart__heading">Корзина (5)</h2>
                        <h3 class="cart__subheading">Леруа Мерлен (3)</h3>
                        <div class="cart__inner">
                            <div class="cart__product">
                                <div class="cart__product-img">
                                    <img src="/img/cart/products/img-1.png" alt="">
                                </div>
                                <div class="cart__product-wrap">
                                    <div class="cart__product-descr">Штукатурка гипсовая Axton 5 <br> кг, 81946334, 41 х 32 х 14 см</div>
                                    <div class="cart__product-shop">10 кг | из Леруа Мерлен</div>
                                </div>
                                <div class="cart__product-wrap">
                                    <div class="cart__product-box">
                                        <span>−</span>
                                        <input class="cart__product-input" type="text" placeholder="1">
                                        <span>+</span>
                                    </div>
                                    <div class="cart__product-box">
                                        <div class="cart__product-icon">
                                            {{-- <img src="/svg/cart/heart-empty.svg" alt=""> --}}
                                            <svg id="favorite" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.65441 2.24183C3.04976 2.24183 2.4829 2.48633 2.0588 2.93067C1.17842 3.85302 1.17842 5.3544 2.0595 6.27822L6.9996 11.4544L11.9404 6.27822C12.8215 5.3544 12.8215 3.85302 11.9404 2.93067C11.0922 2.04125 9.59736 2.04272 8.74917 2.93067L7.49508 4.24465C7.23194 4.52063 6.76725 4.52063 6.50412 4.24465L5.25002 2.92993C4.82593 2.48633 4.25977 2.24183 3.65441 2.24183M6.99969 13.2223V13.2223C6.81424 13.2223 6.63578 13.1454 6.50491 13.0071L1.06864 7.3119C-0.356213 5.81856 -0.356213 3.38897 1.06864 1.89564C1.75727 1.17532 2.67545 0.777832 3.65451 0.777832C4.63357 0.777832 5.55245 1.17532 6.24038 1.89564L6.99969 2.69135L7.75901 1.89637C8.44764 1.17532 9.36582 0.777832 10.3456 0.777832C11.3239 0.777832 12.2428 1.17532 12.9307 1.89564C14.3563 3.38897 14.3563 5.81856 12.9314 7.3119L7.49517 13.0078C7.36361 13.1454 7.18585 13.2223 6.99969 13.2223" fill="none"/>
                                            </svg>
                                        </div>
                                        <a href="#" class="cart__product-link">В избранное</a>
                                    </div>
                                </div>
                                <div class="cart__product-wrap">
                                    <div class="cart__product-price">1 416 ₽</div>
                                    <div class="cart__product-box">
                                        <div class="cart__product-icon">
                                            {{-- <img src="/svg/cart/delete.svg" alt=""> --}}
                                            <svg id="delete" width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.5 2.33333C4.5 1.90378 4.83579 1.55556 5.25 1.55556H6.75C7.16421 1.55556 7.5 1.90378 7.5 2.33333V3.11111H4.5V2.33333ZM3 3.11111V2.33333C3 1.04467 4.00736 0 5.25 0H6.75C7.99264 0 9 1.04467 9 2.33333V3.11111H10.5H11.25C11.6642 3.11111 12 3.45933 12 3.88889C12 4.31844 11.6642 4.66667 11.25 4.66667H10.5V13.2222C10.5 13.6518 10.1642 14 9.75 14H2.25C1.83579 14 1.5 13.6518 1.5 13.2222V4.66667H0.75C0.335786 4.66667 0 4.31844 0 3.88889C0 3.45933 0.335786 3.11111 0.75 3.11111H1.5H3ZM3 4.66667H9V12.4444H3V4.66667Z" fill="none"/>
                                            </svg>
                                        </div>
                                        <a href="#" class="cart__product-link">Удалить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </div>

    <x-cart :products="$products" :quantity="$quantity" :itemsSubTotal="$itemsSubTotal" :cartTotal="$cartTotal"/>
</main>

<x-footer/>
