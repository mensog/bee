<!DOCTYPE html>
<html lang="ru">
<head>
    <title>BeeClub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <head>
<body>
    <div class="container">
        <div class="row">
           <div class="col-md-12">
                <h1>Заказ <a href="#">№{{ $order->id }}</a> {{ $titleNotification }}</h1>
               <p>
                   @if(isset($firstText))
                       {{$firstText}}
                   @endif
                   @if(isset($secondText))
                       {{$secondText}}
                   @endif
                  @if(isset($thirdText))
                       {{$thirdText}}
                   @endif
                   @if(isset($route) && isset($linkName))
                       <a href="{{ $route }}">{{ $linkName }}</a>
                   @endif
               </p>
           </div>
        </div>
        <div class="row">
           <div class="col-md-12">
               <p class="text-muted">Статус заказа</p>
               <p class="{{ $style }}">{{ $status }}</p>
           </div>
        </div>
        <div class="row">
           <div class="col-md-12 text-muted">
               <p>Дата и время доставки:</p>
               <p>{{ $order->delivery_date }}</p>
           </div>
        </div>
        <div class="row">
           <div class="col-md-12 text-muted">
                <p>Адрес доставки:</p>
               <p>{{ $order->address }}</p>
           </div>
        </div>
        <div class="row">
           <div class="col-md-12 text-muted">
                <p>Стоимость заказа:</p>
               <p>{{ $order->getSum() / 100 }} руб. (в том числе и доставки {{ $order->delivery_amount / 100 }} руб.)</p>
           </div>
        </div>
        <div class="container">
            <h1>Товары:</h1>
            @foreach($order->items as $item)
                <div class="row">
                    <div class="col-md-8">
                        {{ $item->product->name }}
                        <small>Арт.{{ $item->product->sku }}</small>
                        <small>
                            @if($item->product->weight)
                                {{$item->product->weight / 1000}} КГ|
                            @endif
                            из {{ $item->product->getStoreName() }}
                        </small>
                    </div>
                    <div class="col-md-4">
                        {{ $item->price * $item->quantity / 100 }} руб.
                        <small>{{ $item->price / 100 }} руб. х {{ $item->quantity }} шт.</small>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="container">
            <h1>Сумма заказа:</h1>
            <div class="row">
                <div class="col-md-4">
                    Вес товара
                    <br>
                    40 кг
                </div>
                <div class="col-md-4">
                    Колличество {{ array_sum($quantity) }} шт
                </div>
                <div class="col-md-4">
                    Сумма с учетом доставки
                    {{ $order->getFinalSum() / 100 }} руб.
                </div>
            </div>
        </div>
    </div>
</body>
</html>
