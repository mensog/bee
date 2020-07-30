<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card no-shadow">
                        <div class="card-head">
                            <header>
                                Пользователи
                            </header>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th class="sort-alpha">ID</th>
                                        <th class="sort-alpha">ФИО</th>
                                        <th class="sort-numeric">Телефон</th>
                                        <th class="sort-alpha">Email</th>
                                        <th class="sort-numeric">Последний заказ</th>
                                        <th class="sort-numeric">Личный счет</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr class="gradeX">
                                            <td>
                                                <a href="{{ route('admin_user', $user->id) }}">
                                                    {{ $user->id }}
                                                </a>
                                            </td>
                                            <td>{{ $user->name }} {{ $user->surname }}</td>
                                            <td>Телефон</td>
                                            <td>{{ $user->email }}</td>
                                            <td>Номер заказа</td>
                                            <td>Личный счет</td>
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
