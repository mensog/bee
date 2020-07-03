<x-header/>

<main id="content" role="main" class="cart-page">
    <div class="container mt-3">
        <div class="mb-4">
            <h1 class="text-center">Избранное</h1>
        </div>
        <div class="mb-10">
            <x-favorites :products="$products" :inCartProductIds="$inCartProductIds"/>
        </div>
    </div>
</main>

<x-footer/>
