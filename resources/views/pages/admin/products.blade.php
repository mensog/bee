<x-header/>

<main id="content" role="main" class="orders-admin">
    <div class="container">
        <h2>Всего товаров: {{$products->total()}}</h2>
        <div class="row">
            @foreach ($products as $key => $product)
                <div class="col-xl-12">
                    <div id="product_{{ $product->id }}" class="">
                        <div>
                            <div class="px-xl-4 p-3">
                                <div class="pb-xl-2">
                                    <div class="row">
                                        <div class="mb-2 col-2">
                                            <div class="mb-2">
                                                <a href="{{ route('product', $product->friendly_url_name) }}"
                                                   class="d-block text-center"><img
                                                        class="img-fluid" src="{{ $product->img_url }}"
                                                        alt="{{ $product->name }}"></a>
                                            </div>
                                        </div>
                                        <div class="col-10">
                                            <p class="mb-0">
                                                <span>Создан: {{$product->created_at}}</span>
                                                <span>Обновлен: {{$product->updated_at}}</span>
                                            </p>
                                            <p class="mb-2">
                                                <a href="{{ route('product', $product->friendly_url_name) }}"
                                                   class="font-size-12 text-gray-5">Категория: {{$product->category->name}}</a>
                                            </p>
                                            <h5 class="mb-1 product-item__title"><a
                                                    href="{{ route('product', $product->friendly_url_name) }}"
                                                    class="text-blue font-weight-bold">Название
                                                    товара: {{ $product->name }}</a></h5>
                                            <p class="font-size-12 p-0 text-gray-110 mb-2">
                                                Описание: {{ $product->description }}</p>
                                            <div class="text-gray-20 mb-2 font-size-12">
                                                <span>Артикул: {{ $product-> sku }}</span>
                                                <span>Вес: {{ $product->weight }}</span>
                                            </div>
                                            <div class="flex-center-between mb-1">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">{{ $product->price / 100 }} руб</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{$products->links()}}
    </div>
</main>

<x-footer/>
