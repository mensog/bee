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
                                <div class="card mb-3 @if($createdOrderId == $order->id) border-primary @endif">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5">
                                                <p class="mb-2 mt-2">ID Заказа: {{ $order->id }}</p>
                                                <p class="mb-2">Статус: {{ __('order_status.' . $order->status) }}</p>
                                                <p class="mb-2">Создан: {{ date('d.m.Y H:i',strtotime($order->created_at)) }}</p>
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
                                                            <span class="mb-2"><a
                                                                    href="/product/{{ $item->product->friendly_url_name }}">{{ $item->product->name }}</a></span>
                                                            <span
                                                                class="mb-2 text-muted">(ID: {{ $item->product_id }})</span>
                                                            <span
                                                                class="mb-2">{{ $item->quantity }}&nbsp;шт&nbsp;</span>
                                                            <span class="mb-2">×</span>
                                                            <span
                                                                class="mb-2">&nbsp;{{ $item->price / 100 }}&nbsp;руб</span>
                                                            <span
                                                                class="mb-2">= {{ $item->getSum() / 100 }}&nbsp;руб</span>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <h4>Сумма заказа: {{ $order->getSum() / 100 }}&nbsp;руб.</h4>
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

        <div class="lk-orders">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="lk-orders__heading">Заказы (12)</h2>
                        <div class="lk-orders__item">
                            <div class="lk-orders__item-wrap">
                                <div class="lk-orders__item-box">
                                    <div class="lk-orders__item-date">Заказ от 26.07.2020</div>
                                    <div class="lk-orders__item-number">№4548912</div>
                                </div>
                                <div class="lk-orders__item-inner">
                                    <div class="lk-orders__item-statusbox">
                                        <div class="lk-orders__item-icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10" cy="10" r="10" fill="#00A454"/>
                                                <g clip-path="url(#clip0)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7818 5.50687C16.0542 5.75455 16.0743 6.17618 15.8266 6.44862L9.15996 13.7819C9.03732 13.9169 8.86479 13.9956 8.68253 14C8.50026 14.0043 8.32418 13.9338 8.19526 13.8049L4.19526 9.80491C3.93491 9.54456 3.93491 9.12245 4.19526 8.8621C4.45561 8.60175 4.87772 8.60175 5.13807 8.8621L8.64368 12.3677L14.84 5.55172C15.0877 5.27928 15.5093 5.2592 15.7818 5.50687Z" fill="white"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0">
                                                <rect width="12" height="12" fill="white" transform="translate(4 4)"/>
                                                </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <a class="lk-orders__item-link lk-orders__item-link_green" href="#">Доставлен (2)</a>
                                    </div>
                                    <div class="lk-orders__item-statusbox">
                                        <div class="lk-orders__item-icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10" cy="10" r="10" fill="#818181"/>
                                                <g clip-path="url(#clip0)">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.13867 5.13807C9.39902 4.87772 9.39902 4.45561 9.13867 4.19526C8.87832 3.93491 8.45621 3.93491 8.19586 4.19526L4.43157 7.95956C4.04104 8.35008 4.04104 8.98325 4.43157 9.37377L8.19586 13.1381C8.45621 13.3984 8.87832 13.3984 9.13867 13.1381C9.39902 12.8777 9.39902 12.4556 9.13867 12.1953L6.27674 9.33333H14.0006V15.3333C14.0006 15.7015 14.2991 16 14.6673 16C15.0355 16 15.3339 15.7015 15.3339 15.3333V9.33333C15.3339 8.59695 14.737 8 14.0006 8H6.27674L9.13867 5.13807Z" fill="white"/>
                                                </g>
                                                <defs>
                                                <clipPath id="clip0">
                                                <rect width="12" height="12" fill="white" transform="translate(4 4)"/>
                                                </clipPath>
                                                </defs>
                                            </svg>                                                
                                        </div>
                                        <a class="lk-orders__item-link lk-orders__item-link_gray" href="#">Возврат (1)</a>
                                    </div>
                                    <div class="lk-orders__item-statusbox">
                                        <div class="lk-orders__item-icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10" cy="10" r="10" fill="#F78C07"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2003 14.1668C14.2003 14.5041 13.9315 14.7779 13.6003 14.7779C13.2691 14.7779 13.0003 14.5041 13.0003 14.1668C13.0003 13.8294 13.2691 13.5557 13.6003 13.5557C13.9315 13.5557 14.2003 13.8294 14.2003 14.1668ZM10.0004 12.3328H5.20043L5.21003 6.22168H11.8004L11.7908 12.3328H10.0004ZM6.99968 14.1668C6.99968 14.5041 6.73088 14.7779 6.39968 14.7779C6.06848 14.7779 5.79968 14.5041 5.79968 14.1668C5.79968 13.8294 6.06848 13.5557 6.39968 13.5557C6.73088 13.5557 6.99968 13.8294 6.99968 14.1668ZM14.8003 10.7937V12.3337H13.0003V9.32764L14.8003 10.7937ZM15.775 10.0227L13 7.76161V6.22222C13 5.54817 12.5122 5 11.9122 5H5.0872C4.4878 5 4 5.54817 4 6.22222V12.3333C4 12.8668 4.3078 13.3166 4.7326 13.4834C4.6486 13.6949 4.6 13.9247 4.6 14.1667C4.6 15.1774 5.4076 16 6.4 16C7.3924 16 8.2 15.1774 8.2 14.1667C8.2 13.9509 8.1568 13.7474 8.089 13.5556H10H11.911C11.8432 13.7474 11.8 13.9509 11.8 14.1667C11.8 15.1774 12.6076 16 13.6 16C14.5924 16 15.4 15.1774 15.4 14.1667C15.4 13.9509 15.3568 13.7474 15.289 13.5556H15.4C15.7318 13.5556 16 13.2824 16 12.9444V10.5C16 10.3142 15.9172 10.1388 15.775 10.0227Z" fill="white"/>
                                            </svg>                                               
                                        </div>
                                        <a class="lk-orders__item-link lk-orders__item-link_orange" href="#">В доставке</a>
                                    </div>
                                </div>
                            </div>
                            <div class="lk-orders__item-wrap">
                                <div class="lk-orders__item-box">
                                    <div class="lk-orders__item-price">35 416 ₽</div>
                                    <div class="lk-orders__item-statusprice">Оплачено, картой онлайн</div>
                                </div>
                                <div class="lk-orders__item-open">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7071 13.7071C17.3166 14.0976 16.6834 14.0976 16.2929 13.7071L9 6.41421L1.70711 13.7071C1.31658 14.0976 0.683418 14.0976 0.292892 13.7071C-0.0976314 13.3166 -0.0976313 12.6834 0.292893 12.2929L8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L17.7071 12.2929C18.0976 12.6834 18.0976 13.3166 17.7071 13.7071Z" fill="black"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

