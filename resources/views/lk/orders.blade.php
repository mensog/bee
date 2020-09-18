@extends('layouts.lk')

@section('content')
    <div>
        @if($orders->total() !== 0)
            <div class="lk-orders">
                <h2 class="lk-orders__heading">Заказы ({{ $orders->total() }})</h2>
                @foreach($orders as $key=> $order)
                    <div class="accordion" id="accordionOrders">
                        <div class="lk-orders__item {{ $order->first() ? '' : 'collapsed' }}" data-toggle="collapse"
                             data-target="#accordionOrders{{ $order->id }}"
                             aria-expanded="true" aria-controls="accordionOrders1">
                            <div class="lk-orders__item-wrap">
                                <div class="lk-orders__item-box">
                                    <div class="lk-orders__item-date">Заказ
                                        от {{ date('d.m.Y H:i',strtotime($order->created_at)) }}</div>
                                    <div class="lk-orders__item-number">№{{ $order->id }}</div>
                                </div>
                                <div class="lk-orders__item-inner">
                                    <div class="lk-orders__item-statusbox">
                                        <div class="lk-orders__item-icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="10" cy="10" r="10" fill="#00A454"/>
                                                <g clip-path="url(#clip0)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                          d="M15.7818 5.50687C16.0542 5.75455 16.0743 6.17618 15.8266 6.44862L9.15996 13.7819C9.03732 13.9169 8.86479 13.9956 8.68253 14C8.50026 14.0043 8.32418 13.9338 8.19526 13.8049L4.19526 9.80491C3.93491 9.54456 3.93491 9.12245 4.19526 8.8621C4.45561 8.60175 4.87772 8.60175 5.13807 8.8621L8.64368 12.3677L14.84 5.55172C15.0877 5.27928 15.5093 5.2592 15.7818 5.50687Z"
                                                          fill="white"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="12" height="12" fill="white"
                                                              transform="translate(4 4)"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <p class="lk-orders__item-link lk-orders__item-link_green mb-0" href="#">
                                            {{ __('order_status.' . $order->status) }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="lk-orders__item-wrap">
                                <div class="lk-orders__item-box">
                                    <div class="lk-orders__item-price">{{ $order->getSum()/100 }} ₽</div>
                                    <div class="lk-orders__item-statusprice">Оплачено, картой онлайн</div>
                                </div>
                                <div class="lk-orders__item-open">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M17.7071 13.7071C17.3166 14.0976 16.6834 14.0976 16.2929 13.7071L9 6.41421L1.70711 13.7071C1.31658 14.0976 0.683418 14.0976 0.292892 13.7071C-0.0976314 13.3166 -0.0976313 12.6834 0.292893 12.2929L8.29289 4.29289C8.68342 3.90237 9.31658 3.90237 9.70711 4.29289L17.7071 12.2929C18.0976 12.6834 18.0976 13.3166 17.7071 13.7071Z"
                                              fill="black"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div id="accordionOrders{{ $order->id }}"
                             class="collapse cart {{ $order->first() ? 'show' : '' }}"
                             aria-labelledby="accordionOrders{{ $order->id }}"
                             data-parent="#accordionOrders{{ $order->id }}">
                            <div class="cart__wrap p-0">
                                @foreach($groupedOrders[$key] as $storeId => $items)
                                    <div>
                                        <h3 class="cart__subheading">
                                            {{ $stores[$storeId]->full_name }} ({{ count($items) }})</h3>
                                        @foreach($items as $item)
                                            <div class="cart__inner">
                                                <div class="cart__product">
                                                    <div class="cart__product-wrapper">
                                                        <div class="cart__product-img">
                                                            <a href="{{ route('product', ['name' => $item->product->friendly_url_name, 'storeSlug' => $item->product->store->slug]) }}">
                                                                <img
                                                                    src="{{ $item->product->img_url ?? '/img/cart/placeholder150.png' }}"
                                                                    alt="{{ $item->product->name }}">
                                                            </a>
                                                        </div>
                                                        <div class="cart__product-wrap">
                                                            <div class="cart__product-descr">
                                                                <a href="{{ route('product', ['name' => $item->product->friendly_url_name, 'storeSlug' => $item->product->store->slug]) }}">
                                                                    {{ $item->product->name }}
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="cart__product-shop">{{ $item->product->weight ? $item->product->weight/1000 . ' кг |' : '' }}
                                                                из {{ $item->product->store->company_name }}</div>
                                                        </div>
                                                    </div>
                                                    <div class="cart__product-wrapper">
                                                        <div class="cart__product-wrap">
                                                            <div class="lk-orders__item-statusbox">
                                                                <div class="lk-orders__item-icon">
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                         fill="none"
                                                                         xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="10" cy="10" r="10" fill="#00A454"/>
                                                                        <g clip-path="url(#clip0)">
                                                                            <path fill-rule="evenodd"
                                                                                  clip-rule="evenodd"
                                                                                  d="M15.7818 5.50687C16.0542 5.75455 16.0743 6.17618 15.8266 6.44862L9.15996 13.7819C9.03732 13.9169 8.86479 13.9956 8.68253 14C8.50026 14.0043 8.32418 13.9338 8.19526 13.8049L4.19526 9.80491C3.93491 9.54456 3.93491 9.12245 4.19526 8.8621C4.45561 8.60175 4.87772 8.60175 5.13807 8.8621L8.64368 12.3677L14.84 5.55172C15.0877 5.27928 15.5093 5.2592 15.7818 5.50687Z"
                                                                                  fill="white"/>
                                                                        </g>
                                                                        <defs>
                                                                            <clipPath id="clip0">
                                                                                <rect width="12" height="12"
                                                                                      fill="white"
                                                                                      transform="translate(4 4)"/>
                                                                            </clipPath>
                                                                        </defs>
                                                                    </svg>
                                                                </div>
                                                                <p class="lk-orders__item-link lk-orders__item-link_green mb-0"
                                                                   href="#">
                                                                    {{ __('order_item_status.' . $item->status) }}
                                                                </p>
                                                            </div>
                                                            <div class="cart__product-box">
                                                                @if(in_array($item->product_id, $favoritesListContent, true))
                                                                    <button data-id="{{ $item->product_id }}"
                                                                            data-action="add"
                                                                            class="btn-add-to-favorites add-to-favorites cart__product-link in-favorite"
                                                                            style="max-width: 100%">
                                                                    <span
                                                                        class="cart__product-icon">
                                                                        <svg
                                                                            id="favorite"
                                                                            width="14"
                                                                            height="14"
                                                                            viewBox="0 0 14 14"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M3.65441 2.24183C3.04976 2.24183 2.4829 2.48633 2.0588 2.93067C1.17842 3.85302 1.17842 5.3544 2.0595 6.27822L6.9996 11.4544L11.9404 6.27822C12.8215 5.3544 12.8215 3.85302 11.9404 2.93067C11.0922 2.04125 9.59736 2.04272 8.74917 2.93067L7.49508 4.24465C7.23194 4.52063 6.76725 4.52063 6.50412 4.24465L5.25002 2.92993C4.82593 2.48633 4.25977 2.24183 3.65441 2.24183M6.99969 13.2223V13.2223C6.81424 13.2223 6.63578 13.1454 6.50491 13.0071L1.06864 7.3119C-0.356213 5.81856 -0.356213 3.38897 1.06864 1.89564C1.75727 1.17532 2.67545 0.777832 3.65451 0.777832C4.63357 0.777832 5.55245 1.17532 6.24038 1.89564L6.99969 2.69135L7.75901 1.89637C8.44764 1.17532 9.36582 0.777832 10.3456 0.777832C11.3239 0.777832 12.2428 1.17532 12.9307 1.89564C14.3563 3.38897 14.3563 5.81856 12.9314 7.3119L7.49517 13.0078C7.36361 13.1454 7.18585 13.2223 6.99969 13.2223"
                                                                                fill="none"/>
                                                                        </svg>
                                                                    </span>
                                                                        В избранном
                                                                    </button>
                                                                @else
                                                                    <button data-id="{{ $item->product_id }}"
                                                                            data-action="add"
                                                                            class="btn-add-to-favorites add-to-favorites cart__product-link"
                                                                            style="max-width: 100%">
                                                                     <span
                                                                         class="cart__product-icon">
                                                                        <svg
                                                                            id="favorite"
                                                                            width="14"
                                                                            height="14"
                                                                            viewBox="0 0 14 14"
                                                                            fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                fill-rule="evenodd"
                                                                                clip-rule="evenodd"
                                                                                d="M3.65441 2.24183C3.04976 2.24183 2.4829 2.48633 2.0588 2.93067C1.17842 3.85302 1.17842 5.3544 2.0595 6.27822L6.9996 11.4544L11.9404 6.27822C12.8215 5.3544 12.8215 3.85302 11.9404 2.93067C11.0922 2.04125 9.59736 2.04272 8.74917 2.93067L7.49508 4.24465C7.23194 4.52063 6.76725 4.52063 6.50412 4.24465L5.25002 2.92993C4.82593 2.48633 4.25977 2.24183 3.65441 2.24183M6.99969 13.2223V13.2223C6.81424 13.2223 6.63578 13.1454 6.50491 13.0071L1.06864 7.3119C-0.356213 5.81856 -0.356213 3.38897 1.06864 1.89564C1.75727 1.17532 2.67545 0.777832 3.65451 0.777832C4.63357 0.777832 5.55245 1.17532 6.24038 1.89564L6.99969 2.69135L7.75901 1.89637C8.44764 1.17532 9.36582 0.777832 10.3456 0.777832C11.3239 0.777832 12.2428 1.17532 12.9307 1.89564C14.3563 3.38897 14.3563 5.81856 12.9314 7.3119L7.49517 13.0078C7.36361 13.1454 7.18585 13.2223 6.99969 13.2223"
                                                                                fill="none"/>
                                                                        </svg>
                                                                    </span>
                                                                        В избранное
                                                                    </button>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="cart__product-wrap">
                                                            <div class="cart__product-price">
                                                                {{ $item->getSum() / 100 }} ₽
                                                                @if($item->quantity > 1)
                                                                    <p>{{ $item->price / 100 }} ₽/ за шт</p>
                                                                @endif
                                                            </div>
                                                            <div class="cart__product-box">
                                                                <button type="button"
                                                                        class="cart__product-link">
                                                                <span
                                                                    class="cart__product-icon">
                                                                    <svg width="14" height="14" viewBox="0 0 14 14"
                                                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                                              d="M5.99349 1.32775C6.29723 1.02401 6.29723 0.531547 5.99349 0.227806C5.68975 -0.0759353 5.19729 -0.0759353 4.89355 0.227806L0.501865 4.61949C0.0462534 5.0751 0.0462533 5.81379 0.501865 6.2694L4.89355 10.6611C5.19729 10.9648 5.68975 10.9648 5.99349 10.6611C6.29723 10.3573 6.29723 9.86488 5.99349 9.56114L2.65457 6.22222H11.6657V13.2222C11.6657 13.6518 12.014 14 12.4435 14C12.8731 14 13.2213 13.6518 13.2213 13.2222V6.22222C13.2213 5.36311 12.5248 4.66667 11.6657 4.66667H2.65457L5.99349 1.32775Z"
                                                                              fill="#9F9F9F"/>
                                                                    </svg>
                                                                </span>
                                                                    Вернуть товар
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row text-center py-3">
                        @if($delivery)
                            <div class="col-md-6">
                                {{ $delivery->title }}
                            </div>
                            <div class="col-md-6">
                                {{ $order->delivery_amount / 100}} руб.
                            </div>
                        @endif
                    </div>
                @endforeach

            </div>
        @else
            <x-empty-list page="orders"/>
        @endif

    </div>
@endsection

