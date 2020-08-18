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
    <x-cart :products="$products" :quantity="$quantity" :itemsSubTotal="$itemsSubTotal" :cartTotal="$cartTotal"/>
</main>

<x-footer/>
