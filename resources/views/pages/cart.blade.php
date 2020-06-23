<x-header/>

<main id="content" role="main" class="cart-page">
    <div class="container mt-3">
        <div class="mb-4">
            <h1 class="text-center">Корзина</h1>
        </div>
        <div class="mb-10">
            <x-cart :products="$products" :quantity="$quantity"/>
        </div>
    </div>
</main>

<x-footer/>
