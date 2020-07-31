<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card no-shadow">
                        <div class="card-head">
                            <header>
                                Товары
                            </header>
                            <div class="tools">
                                <div class="btn-group">
                                    <a href="{{ route('admin_create_product') }}"
                                       class="btn btn-block ink-reaction btn-warning">
                                        Добавить товар
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Артикул</th>
                                        <th class="sort-alpha">Статус</th>
                                        <th class="sort-alpha">Название</th>
                                        <th class="sort-alpha">Поставщик</th>
                                        <th class="sort-numeric">Стоимость</th>
                                        <th class="sort-alpha">Категория</th>
                                        <th class="sort-alpha">Ссылка в магазине</th>
                                        <th>Посл. изменение</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr class="gradeX clickable-row"
                                            data-href="{{ route('admin_product', $product->friendly_url_name) }}">
                                            <td>{{ $product->sku }}</td>
                                            <td>{{ $product->status }}</td>
                                            <td data-toggle="tooltip" data-placement="bottom"
                                                data-trigger="hover"
                                                data-original-title="{{ $product->name }}">{{ Str::limit($product->name, 25) }}</td>
                                            <td>{{ $product->getStoreName() }}</td>
                                            <td>{{ $product->price / 100 }} руб</td>
                                            <td>{{ Str::limit($product->category->name, 30) }}</td>
                                            <td class="remove"><a
                                                    href="{{ $product->getStoreProductLink() }}">Ссылка</a></td>
                                            <td>{{ date('d.m.Y H:i',strtotime($product->updated_at)) }}</td>
                                            <td class="remove"
                                                data-toggle="tooltip" data-placement="bottom"
                                                data-trigger="hover"
                                                data-original-title="Удалить">
                                                <x-admin.remove-with-modal
                                                    type="icon"
                                                    :action="route('admin_product', $product->friendly_url_name)"
                                                    :text="$product->name">
                                                </x-admin.remove-with-modal>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<x-admin.footer/>
