<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body order">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-bordered style-default-light no-shadow order-info">
                        <ul class="card-head nav nav-tabs nav-justified" data-toggle="tabs">
                            <li>
                                <a href="#first1" class="active">Заказ № {{ $order->id }}</a>
                            </li>
                            <li>
                                <a href="#second1">Изменить</a>
                            </li>
                        </ul>
                        <div class="card-body style-default-bright tab-content">
                            <div class="tab-pane active" id="first1">
                                <div>
                                    Статус заказа
                                    <span class="pull-right">
                                    {{ __('order_status.' . $order->status) }}
                                </span>
                                </div>
                                <hr>
                                <div>
                                    Дата заказа
                                    <span class="pull-right">
                                    {{ date('d.m.Y H:i',strtotime($order->created_at)) }}
                                </span>
                                </div>
                                <div>
                                    Адрес доставки
                                    <span id="mapAddress" data-address="Кутузовский проспект 24" class="pull-right">
                                     {{ $order->address }}
                                </span>
                                </div>
                                <div>
                                    Дата Доставки
                                    <span class="pull-right">
                                    {{ date('d.m.Y H:i',strtotime($order->created_at)) }}
                                </span>
                                </div>
                                <hr>
                                <div>
                                    ФИО
                                    <span class="pull-right">
                                     {{ $order->full_name }}
                                </span>
                                </div>
                                <div>
                                    Телефон
                                    <span class="pull-right">
                                    {{ $order->phone }}
                                </span>
                                </div>
                                <div>
                                    Почта
                                    <span class="pull-right">
                                    {{ $order->email }}
                                </span>
                                </div>
                                <div>
                                    Личный счет
                                    <span class="pull-right">
                                    245 руб
                                </span>
                                </div>
                                <hr>
                                <div>
                                    Кол-во позиций
                                    <span class="pull-right">
                                    {{ count($order->items) }}
                                </span>
                                </div>
                                <div>
                                    Сумма заказа
                                    <span class="pull-right">
                                    {{ $order->getSum() / 100 }} руб
                                </span>
                                </div>
                            </div>
                            <div class="tab-pane floating-label" id="second1">
                                <form id="editOrderForm" class="form" action="#"
                                      method="post">
                                    @csrf
                                    <div class="form-group floating-label">
                                        <select id="status" name="status" class="form-control">
                                            <option value="{{ $order->status }}">{{ __('order_status.' . $order->status) }}</option>
                                            <option value="{{ \App\OrderStatus::CANCELED }}">{{ __('order_status.' . \App\OrderStatus::CANCELED) }}</option>
                                            <option value="{{ \App\OrderStatus::PAID }}">{{ __('order_status.' . \App\OrderStatus::PAID) }}</option>
                                            <option value="{{ \App\OrderStatus::READY_FOR_DELIVERY }}">{{ __('order_status.' . \App\OrderStatus::READY_FOR_DELIVERY) }}</option>
                                            <option value="{{ \App\OrderStatus::GIVEN_TO_COURIER }}">{{ __('order_status.' . \App\OrderStatus::GIVEN_TO_COURIER) }}</option>
                                            <option value="{{ \App\OrderStatus::RE_DELIVERY }}">{{ __('order_status.' . \App\OrderStatus::RE_DELIVERY) }}</option>
                                            <option value="{{ \App\OrderStatus::REFUNDED }}">{{ __('order_status.' . \App\OrderStatus::REFUNDED) }}</option>
                                            <option value="{{ \App\OrderStatus::COMPLETED }}">{{ __('order_status.' . \App\OrderStatus::COMPLETED) }}</option>
                                        </select>
                                        <label for="status">Статус заказа</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="address" value="{{ $order->address }}"
                                               class="form-control" id="address">
                                        <label for="address">Адрес доставки</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group date date-picker">
                                            <div class="input-group-content">
                                                <input type="text" name="date"
                                                       value="{{ date('d/m/Y',strtotime($order->created_at)) }}"
                                                       class="form-control">
                                            </div>
                                            <span class="input-group-addon"><i
                                                    class="fa fa-calendar"></i></span>
                                        </div>
                                        <label for="date">Дата доставки</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="fullName" value="{{ $order->full_name }}"
                                               class="form-control" id="fullName" required>
                                        <label for="fullName">ФИО</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" value="{{ $order->phone }}"
                                               class="form-control" id="phone" required>
                                        <label for="phone">Телефон</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="email" value="{{ $order->email }}"
                                               class="form-control" id="email" required>
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="balance" value="{{ $order->email }}"
                                               class="form-control" id="balance" required>
                                        <label for="balance">Личный счет</label>
                                    </div>
                                    <div>
                                        Кол-во позиций
                                        <span class="pull-right">
                                             {{ count($order->items) }}
                                        </span>
                                    </div>
                                    <div>
                                        Сумма заказа
                                        <span class="pull-right">
                                            {{ $order->getSum() / 100 }} руб
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-block ink-reaction btn-warning"
                                            style="margin-top: 15px;">
                                        Сохранить изменения
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion1">
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1"
                                 data-target="#accordion1-1" aria-expanded="false">
                                <header>Курьеры</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-1" class="collapse" aria-expanded="false" style="height: 0px;">
                                <div class="card-body">
                                    @if(true)
                                        <form class="form" action="" method="">
                                            @csrf
                                            <div class="form-group">
                                                <select class="form-control select2-list"
                                                        name="courier"
                                                        data-placeholder="Выберите курьера">
                                                    <optgroup label="Курьеры">
                                                        <option value="none">
                                                            Не выбран
                                                        </option>
                                                        @foreach($couriers as $courier)
                                                            <option value="{{ $courier->id }}">
                                                                {{ $courier->full_name }}
                                                            </option>
                                                        @endforeach
                                                    </optgroup>
                                                </select>
                                                <label>Выберите курьера</label>
                                            </div>
                                            <button class="btn btn-block ink-reaction btn-warning">
                                                Применить
                                            </button>
                                        </form>
                                    @else
                                        <div>
                                            Курьер
                                            <span class="pull-right">
                                                {{ $courier->full_name }}
                                            </span>
                                        </div>
                                        <div>
                                            Телефон
                                            <span class="pull-right">
                                                {{ $courier->phone }}
                                            </span>
                                        </div>
                                        <div>
                                            Габариты автомобиля
                                            <span class="pull-right">
                                                {{ $courier->car_size }}
                                            </span>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion2">
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2"
                                 data-target="#accordion2-1" aria-expanded="false">
                                <header>Заметки</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-1" class="collapse" aria-expanded="false" style="height: 0px;">
                                <div class="card-body">
                                    <form action="" class="form" method="">
                                        @csrf
                                        <div class="form-group floating-label">
                                            <textarea name="notes" id="notes" class="form-control" rows="2"
                                                      placeholder=""></textarea>
                                            <label for="textarea2">Заметки</label>
                                        </div>
                                        <button type="submit" class="btn btn-block ink-reaction btn-warning">
                                            Сохранить
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card no-shadow">
                        <div class="card-head">
                            <header>
                                Leroy Merlin
                            </header>
                        </div>
                        <div class="card-body" style="padding-top: 0;">
                            <div>
                                <div style="max-width: 200px">
                                    <span class="text-default-light"
                                          style="vertical-align: sub;">
                                        {{ __('order_status.' . $order->status) }}
                                    </span>
                                    <div class="btn-group pull-right">
                                        <a href="#" class="btn btn-icon-toggle dropdown-toggle"
                                           data-toggle="dropdown"><i class="fa fa-chevron-down"></i></a>
                                        <ul class="dropdown-menu animation-dock pull-right menu-card-styling"
                                            role="menu" style="text-align: left;width: fit-content;">
                                            <li>
                                                <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::CANCELED}}';document.getElementById('status-form').submit();"
                                                   href="javascript:void(0);">
                                                    {{__('order_status.' . \App\OrderStatus::CANCELED)}}
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::PAID}}';document.getElementById('status-form').submit();"
                                                   href="javascript:void(0);">
                                                    {{__('order_status.' . \App\OrderStatus::PAID)}}
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::READY_FOR_DELIVERY}}';document.getElementById('status-form').submit();"
                                                   href="javascript:void(0);">
                                                    {{__('order_status.' . \App\OrderStatus::READY_FOR_DELIVERY)}}
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::GIVEN_TO_COURIER}}';document.getElementById('status-form').submit();"
                                                   href="javascript:void(0);">
                                                    {{__('order_status.' . \App\OrderStatus::GIVEN_TO_COURIER)}}
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::RE_DELIVERY}}';document.getElementById('status-form').submit();"
                                                   href="javascript:void(0);">
                                                    {{__('order_status.' . \App\OrderStatus::RE_DELIVERY)}}
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::REFUNDED}}';document.getElementById('status-form').submit();"
                                                   href="javascript:void(0);">
                                                    {{__('order_status.' . \App\OrderStatus::REFUNDED)}}
                                                </a>
                                            </li>
                                            <li>
                                                <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::COMPLETED}}';document.getElementById('status-form').submit();"
                                                   href="javascript:void(0);">
                                                    {{__('order_status.' . \App\OrderStatus::COMPLETED)}}
                                                </a>
                                            </li>
                                            <form id="status-form" action="http://localhost:8888/order/6" method="POST"
                                                  style="display: none;">
                                                <input type="hidden" name="status" value="OrderPending"
                                                       id="status-hidden">
                                                <input type="hidden" name="_token"
                                                       value="M4EoyBOAegzHT3JIvyRGg2FGKqFfD8zzdhDES4vx"></form>
                                        </ul>
                                    </div>
                                </div>
                                <form class="form-group" style="margin-top: 15px; max-width: 200px" action="">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-content">
                                                <input type="text" class="form-control" id="addId">
                                                <label for="addId">Привязать ID</label>
                                            </div>
                                            <div class="input-group-btn">
                                                <button
                                                    class="btn ink-reaction btn-icon-toggle btn-primary"
                                                    type="button">
                                                    <i class="md md-check"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <table class="table order-table hover">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Товар</th>
                                        <th>Статус</th>
                                        <th>Стоимость</th>
                                        <th>Кол-во</th>
                                        <th>Итог</th>
                                        <th>Ссылка на сайте</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php $i = 1 @endphp
                                    @foreach($order->items as $key => $item)
                                        @if($key < 2)
                                            <tr class="gradeX clickable-row"
                                                data-href="{{ route('admin_product', $item->product->friendly_url_name) }}">
                                                <td>{{ $i }}</td>
                                                <td>{{ $item->product->name }}</td>
                                                <td>Статус товара</td>
                                                <td>{{ $item->price / 100 }} руб</td>
                                                <td>{{ $item->quantity }}шт</td>
                                                <td>{{ $item->getSum() / 100 }} руб</td>
                                                <td>Ссылка в магазине</td>
                                                <td class="remove"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    data-trigger="hover"
                                                    data-original-title="Удалить">
                                                    <a href="#" class="btn btn-flat ink-reaction btn-danger"
                                                       data-action=""
                                                       data-text="продукт"
                                                       data-toggle="modal" data-target="#deleteModal">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                        @php $i ++ @endphp
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @if(count($order->items) > 2)
                        <div class="card no-shadow">
                            <div class="card-head">
                                <header>
                                    OBI
                                </header>
                            </div>
                            <div class="card-body" style="padding-top: 0;">
                                <div>
                                    <div style="max-width: 200px">
                                    <span class="text-default-light"
                                          style="vertical-align: sub;">
                                        {{ __('order_status.' . $order->status) }}
                                    </span>
                                        <div class="btn-group pull-right">
                                            <a href="#" class="btn btn-icon-toggle dropdown-toggle"
                                               data-toggle="dropdown"><i class="fa fa-chevron-down"></i></a>
                                            <ul class="dropdown-menu animation-dock pull-right menu-card-styling"
                                                role="menu" style="text-align: left;width: fit-content;">
                                                <li>
                                                    <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::CANCELED}}';document.getElementById('status-form').submit();"
                                                       href="javascript:void(0);">
                                                        {{__('order_status.' . \App\OrderStatus::CANCELED)}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::PAID}}';document.getElementById('status-form').submit();"
                                                       href="javascript:void(0);">
                                                        {{__('order_status.' . \App\OrderStatus::PAID)}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::READY_FOR_DELIVERY}}';document.getElementById('status-form').submit();"
                                                       href="javascript:void(0);">
                                                        {{__('order_status.' . \App\OrderStatus::READY_FOR_DELIVERY)}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::GIVEN_TO_COURIER}}';document.getElementById('status-form').submit();"
                                                       href="javascript:void(0);">
                                                        {{__('order_status.' . \App\OrderStatus::GIVEN_TO_COURIER)}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::RE_DELIVERY}}';document.getElementById('status-form').submit();"
                                                       href="javascript:void(0);">
                                                        {{__('order_status.' . \App\OrderStatus::RE_DELIVERY)}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::REFUNDED}}';document.getElementById('status-form').submit();"
                                                       href="javascript:void(0);">
                                                        {{__('order_status.' . \App\OrderStatus::REFUNDED)}}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a onclick="event.preventDefault();document.getElementById('status-hidden').value='{{\App\OrderStatus::COMPLETED}}';document.getElementById('status-form').submit();"
                                                       href="javascript:void(0);">
                                                        {{__('order_status.' . \App\OrderStatus::COMPLETED)}}
                                                    </a>
                                                </li>
                                                <form id="status-form" action="http://localhost:8888/order/6"
                                                      method="POST"
                                                      style="display: none;">
                                                    <input type="hidden" name="status" value="OrderPending"
                                                           id="status-hidden">
                                                    <input type="hidden" name="_token"
                                                           value="M4EoyBOAegzHT3JIvyRGg2FGKqFfD8zzdhDES4vx"></form>
                                            </ul>
                                        </div>
                                    </div>
                                    <form class="form-group" style="margin-top: 15px; max-width: 200px" action="">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-content">
                                                    <input type="text" class="form-control" id="addId">
                                                    <label for="addId">Привязать ID</label>
                                                </div>
                                                <div class="input-group-btn">
                                                    <button
                                                        class="btn ink-reaction btn-icon-toggle btn-primary"
                                                        type="button">
                                                        <i class="md md-check"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="table-responsive">
                                    <table class="order-table table hover">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Товар</th>
                                            <th>Статус</th>
                                            <th>Стоимость</th>
                                            <th>Кол-во</th>
                                            <th>Итог</th>
                                            <th>Ссылка на сайте</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $i = -1 @endphp
                                        @foreach($order->items as $key => $item)
                                            @if($key >= 2)
                                                <tr class="gradeX clickable-row"
                                                    data-href="{{ route('product', $item->product->friendly_url_name) }}">
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $item->product->name }}</td>
                                                    <td>Статус товара</td>
                                                    <td>{{ $item->price / 100 }} руб</td>
                                                    <td>{{ $item->quantity }}шт</td>
                                                    <td>{{ $item->getSum() / 100 }} руб</td>
                                                    <td>Ссылка в магазине</td>
                                                    <td class="remove"
                                                        data-toggle="tooltip" data-placement="bottom"
                                                        data-trigger="hover"
                                                        data-original-title="Удалить">
                                                        <a href="#" class="btn btn-flat ink-reaction btn-danger"
                                                           data-toggle="modal" data-target="#deleteModal">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                            @php $i ++ @endphp
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="card no-shadow">
                        <div class="card-body no-padding">
                            <div id="map" style="overflow:hidden;width: 100%; height: 500px"></div>
                        </div>
                        <script type="text/javascript">
                            ymaps.ready(init);

                            const address = document.getElementById('mapAddress').getAttribute('data-address');

                            const addressObi = [
                                [55.789539, 37.596008],
                                [55.789210, 37.594719]
                            ]

                            const addressLerya = [
                                [55.749539, 37.576008],
                                [55.749210, 37.574719]
                            ]

                            function init() {
                                var myMap = new ymaps.Map('map', {
                                    center: [55.74, 37.58],
                                    zoom: 10,
                                    controls: []
                                });

                                addressObi.forEach(address => {
                                    myMap.geoObjects.add(new ymaps.Placemark(address, {
                                        balloonContent: 'ОБИ',
                                        iconCaption: 'ОБИ'
                                    }, {
                                        iconColor: '#b69800'
                                    }))
                                })

                                addressLerya.forEach(address => {
                                    myMap.geoObjects.add(new ymaps.Placemark(address, {
                                        balloonContent: 'Леруа',
                                        iconCaption: 'Леруа'
                                    }, {
                                        iconColor: '#FFB698'
                                    }))
                                })

                                let geocoderHome = ymaps.geocode(address, {results: 1});
                                geocoderHome.then(res => {
                                    myMap.geoObjects.add(res.geoObjects);
                                    const firstGeoObject = res.geoObjects.get(0);
                                    const coords = firstGeoObject.geometry.getCoordinates();

                                    myMap.setCenter(coords, 10, [])
                                });

                            }

                            ymaps.ready(init);
                        </script>
                    </div>

                    <ul class="timeline collapse-lg timeline-hairline">
                        <li class="timeline-inverted">
                            <div class="timeline-circ circ-xl style-primary"><span
                                    class="glyphicon glyphicon-leaf"></span></div>
                            <div class="timeline-entry">
                                <div class="card style-default-bright">
                                    <div class="card-body small-padding">
                                        <img class="img-circle img-responsive pull-left width-1"
                                             src="../../assets/img/avatar9.jpg?1404026744" alt=""/>
                                        <span class="text-medium">Произошло событие <a class="text-primary"
                                                                                       href="#">пример</a><br/></span>
                                        <span class="opacity-50">
													Среда, Июля 16, 2020
												</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-circ circ-xl style-default-dark"><i class="fa fa-quote-left"></i>
                            </div>
                            <div class="timeline-entry">
                                <div class="card style-default-dark">
                                    <div class="card-body small-padding">
                                        <img class="img-circle img-responsive pull-left width-1"
                                             src="../../assets/img/avatar7.jpg?1404026721" alt=""/>
                                        <span class="text-medium">Что-то произошло <span
                                                class="text-primary">тут</span></span><br/>
                                        <span class="opacity-50">
													Среда, Июля 16, 2020
												</span>
                                    </div>
                                    <div class="card-body">
                                        <p><em>А тут описание например</em></p>
                                        <img class="img-responsive" src="../../assets/img/img14.jpg?1404589160"
                                             alt=""/>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
</div>

<x-admin.footer/>

