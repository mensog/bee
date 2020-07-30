<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card no-shadow">
                        <div class="card-head">
                            <header>
                                Неразобранные категории
                            </header>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="table table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th class="sort-alpha">Название</th>
                                        <th class="sort-alpha">Поставщик</th>
                                        <th>Задать категорию</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="gradeX">
                                        <td>Паркет</td>
                                        <td>Оби</td>
                                        <td>
                                            <form class="form-group" action="">
                                                <div class="input-group">
                                                    <div class="input-group-content">
                                                        <input class="form-control" min="0" type="number"/>
                                                    </div>
                                                    <div class="input-group-btn">
                                                        <button class="btn ink-reaction btn-icon-toggle btn-primary"
                                                                type="submit">
                                                            <i class="md md-check"></i>
                                                        </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </td>
                                    </tr>
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
