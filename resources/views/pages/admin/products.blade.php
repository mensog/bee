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
                                    <button class="btn btn-block ink-reaction btn-warning">
                                        Добавить товар
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Артикул</th>
                                        <th class="sort-alpha">Название</th>
                                        <th class="sort-alpha">Поставщик</th>
                                        <th class="sort-numeric">Стоимость</th>
                                        <th class="sort-alpha">Категория</th>
                                        <th>Посл. изменение</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr class="gradeX">
                                            <td>
                                                <a href="{{ route('admin_product', $product->friendly_url_name) }}">
                                                    {{ $product->sku }}
                                                </a>
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->getStoreName() }}</td>
                                            <td>{{ $product->price / 100 }} руб</td>
                                            <td>{{ $product->category->name }}</td>
                                            <td>{{ date('d.m.Y H:i',strtotime($product->updated_at)) }}</td>
                                            <td>
                                                <a href="#" class="btn ink-reaction btn-icon-toggle btn-danger">
                                                    <i class="md md-highlight-remove"></i>
                                                </a>
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
