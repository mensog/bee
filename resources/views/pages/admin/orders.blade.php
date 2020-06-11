<x-header/>

<main id="content" role="main" class="orders-admin">
    <div class="container">
        <h2>Всего заказов: {{count($orders)}}</h2>
        <div class="row">
            @foreach($orders as $order)
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5">
                                    <h3>Информация по заказу</h3>
                                    <p class="mb-2">ID Заказа: {{$order->id}}</p>
                                    <p class="mb-2">Создан: {{$order->created_at}}</p>
                                    <p class="mb-2">Обновлен: {{$order->updated_at}}</p>
                                    <p class="mb-2">Email покупателя: {{$order->email}}</p>
                                    <p class="mb-2">Сумма заказа: {{$order->getSum() / 100}} руб.</p>
                                </div>
                                <div class="col-7">
                                    <h3>Товары:</h3>
                                    <div>
                                    @foreach($order->items as $item)
                                        <div class="mr-3 mb-2">
                                            <span class="mb-2">ID: {{$item->product_id}}</span>
                                            <span class="mb-2">{{$item->product->name}}</span>
                                            <span class="mb-2">{{$item->quantity}}шт</span>
                                            <span class="mb-2">{{$item->price / 100}} руб</span>
                                            <span class="mb-2">= {{$item->getSum() / 100}} руб</span>
                                        </div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
    </div>
</main>

<x-footer/>
