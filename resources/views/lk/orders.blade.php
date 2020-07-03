@extends('layouts.lk')

@section('content')
    <div>
        @if($orders->total() !== 0)
            <h2>@choice('У вас :count заказ|У вас :count заказа|У вас :count заказов|{0}', $orders->total(), [':count' => $orders->total()])</h2>
            <div class="card-lk">
                <div class="card-lk__body">
                    <div class="row">
                        @foreach($orders as $order)
                            <div class="col-12">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="mb-2 mt-2">ID Заказа: {{ $order->id }}</p>
                                                <p class="mb-2">Статус: {{ __('order_status.' . $order->status) }}</p>
                                                <p class="mb-2">Создан: {{ $order->created_at }}</p>
                                                <p class="mb-2">Адрес доставки: {{ $order->address }}</p>
                                                <p class="mb-2">Контактное лицо: {{ $order->full_name }}</p>
                                                <p class="mb-2">Телефон: {{ $order->phone }}</p>
                                                <p class="mb-2">Email: {{ $order->email }}</p>
                                            </div>
                                            <div class="col-7">
                                                <h3>Товары:</h3>
                                                <div>
                                                    @foreach($order->items as $item)
                                                        <div class="mr-3 mb-2">
                                                            <span class="mb-2"><a href="{{ $item->product->friendly_url_name }}">{{ $item->product->name }}</a></span>
                                                            <span class="mb-2 text-muted">(ID: {{ $item->product_id }})</span>
                                                            <span class="mb-2">{{ $item->quantity }}&nbsp;шт&nbsp;</span>
                                                            <span class="mb-2">×</span>
                                                            <span class="mb-2">&nbsp;{{ $item->price / 100 }}&nbsp;руб</span>
                                                            <span class="mb-2">= {{ $item->getSum() / 100 }}&nbsp;руб</span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <p class="mb-2"><h4>Сумма заказа: {{ $order->getSum() / 100 }}&nbsp;руб.</h4></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                    {{$orders->links()}}
                </div>
            </div>
        @else
            <h2 class="text-center pt-10 pb-5">Вы еще ничего не заказывали</h2>
            <p class="text-center font-size-32">Перейти в <a href="<?php echo e(route('catalog')); ?>">каталог</a></p>
        @endif
    </div>
@endsection
