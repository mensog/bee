<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <head>
<body>
<div class="container">
    <div class="row">
       <div class="col-md-12">
            <h1>Заказ <a href="#">№{{ $order->id }} {{$introLines[0]}}</a></h1>
           <p>{{$introLines[1]}}</p>
       </div>
    </div>
    <div class="row">
       <div class="col-md-12">
           <p class="text-muted">Статус заказа</p>
           <p>{{ $order->status }}</p>
       </div>
    </div>
    <div class="row">
       <div class="col-md-12 text-muted">
           <p>Дата и время доставки</p>
           <p>{{ $order->delivery_date }}</p>
       </div>
    </div>
    <div class="row">
       <div class="col-md-12 text-muted">
            <p>Адрес доставки</p>
           <p>{{ $order->address }}</p>
       </div>
    </div>
    <div class="row">
       <div class="col-md-12 text-muted">
            <p>Стоимость доставки</p>
           <p>{{ $order->delivery_amount / 100 }} руб.</p>
       </div>
    </div>
    <div class="container">
        <h1>Товары:</h1>
        @foreach($order->items as $item)
            <div class="row">
                <div class="col-md-8">
                    {{$item->product->name}}
                    <small>{{$item->product->weight}}КГ| из {{ $item->product->getStoreName() }}</small>
                </div>
                <div class="col-md-4">
                    {{$item->product->price / 100}}
                    <small>{{$item->price / 100}}руб. х {{$item->quantity}}шт.</small>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container">
        <h1>Сумма заказа:</h1>
        <div class="row">
            <div class="col-md-4">
                Вес товара
            </div>
            <div class="col-md-4">
                Колличество {{ count($order->items) }}
            </div>
            <div class="col-md-4">
                Сумма с учетом доставки
                {{$order->getSum() / 100}}
            </div>
        </div>
    </div>
</div>
</body>

</html>
