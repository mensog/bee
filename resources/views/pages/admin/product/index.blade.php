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
                                    <a href="{{ route('admin_create_product_page') }}"
                                       class="btn btn-block ink-reaction btn-warning">
                                        Добавить товар
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatableProducts" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th>Артикул</th>
                                        <th class="sort-alpha">Модерация</th>
                                        <th class="sort-alpha">Видимость</th>
                                        <th class="sort-alpha">Название</th>
                                        <th class="sort-alpha">Поставщик</th>
                                        <th class="sort-numeric">Стоимость</th>
                                        <th class="sort-alpha">Категория</th>
                                        <th>Ссылка в магазине</th>
                                        <th class="sort-alpha">Посл. изменение</th>
                                    </tr>
                                    </thead>
                                    <tbody>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {

        $('#datatableProducts').DataTable({
            "dom": 'lCfrtip',
            "order": [],
            "colVis": {
                "buttonText": "Columns",
                "overlayFade": 0,
                "align": "right"
            },
            "language": {
                "lengthMenu": '_MENU_ кол-во на страницу',
                "search": '<i class="fa fa-search"></i>',
                "zeroRecords": "Результаты не найдены",
                "infoEmpty": "Сейчас тут пусто",
                "info": "Страница _PAGE_ из _PAGES_ ",
                "infoFiltered": " - выбрано из _MAX_ товаров",
                "paginate": {
                    "previous": '<i class="fa fa-angle-left"></i>',
                    "next": '<i class="fa fa-angle-right"></i>'
                }
            },
            serverSide: true,
            ajax: {
                url: '{{ route('admin_products_api') }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            },
            "createdRow": function ( row, data, index ) {
                $(row).attr('data-href',data['editLink']);
                let nameCell = $(row).find('td:eq(3)');
                nameCell.attr('data-toggle', 'tooltip');
                nameCell.attr('data-placement', 'bottom');
                nameCell.attr('data-trigger', 'hover');
                nameCell.attr('data-original-title', data['name']);
            },
            columns: [
                { data: 'sku' },
                { data: 'moderation' },
                { data: 'visible' },
                {
                    data: 'name',
                    render: function (data, type, row) {
                        return data.substr(0, 25);
                    }
                },
                { data: 'partner' },
                { data: 'price' },
                { data: 'category' },
                {
                    data: 'storeLink',
                    render: function (data, type, row) {
                        return '<a href="' + data + '">Ссылка</a>'
                    }
                },
                { data: 'updatedAt' }
            ],
            "columnDefs": [
                { "orderable": false, "targets": 7 }
            ]
        });
        $('#datatableProducts').on('draw.dt', function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
    })
</script>
<x-admin.footer/>
