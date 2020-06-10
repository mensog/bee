<x-header/>

<main id="content" role="main" class="cart-page">
    <div class="container mt-3">
        <div class="mb-4">
            <h1 class="text-center">Корзина</h1>
        </div>
        <div class="mb-10 cart-table">
            <form class="mb-4" action="#" method="post">
                <table class="table" cellspacing="0">
                    <thead>
                    <tr>
                        <th class="product-thumbnail">&nbsp;</th>
                        <th class="product-name">Товар</th>
                        <th class="product-price">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr class="">
                            <td class="d-none d-md-table-cell">
                                <a href="{{ route('category', $product->friendly_url_name) }}"><img
                                        class="img-fluid max-width-100 p-1 border border-color-1"
                                        src="{{$product->img_url}}" alt="{{$product->description}}"></a>
                            </td>

                            <td data-title="Product">
                                <a href="#" class="text-gray-90">{{$product->name}}</a>
                            </td>

                            <td data-title="Price">
                                <span class="">{{$product->price / 100}} руб</span>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="6" class="border-top space-top-2 justify-content-center">
                            <div class="pt-md-3">
                                <div class="d-block d-md-flex flex-center-between">
                                    <div class="mb-3 mb-md-0 w-xl-40">

                                        <form class="js-focus-state">
                                            <label class="sr-only" for="subscribeSrEmail">E-mail</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="text"
                                                       id="subscribeSrEmail" placeholder="Введите e-mail"
                                                       aria-label="email" aria-describedby="subscribeButton"
                                                       required>
                                                <div class="input-group-append">
                                                    <button class="btn btn-block btn-dark px-4" type="button"
                                                            id="subscribeButton"><i
                                                            class="fas fa-tags d-md-none"></i><span
                                                            class="d-none d-md-inline">Оформить заказ</span></button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</main>

<x-footer/>
