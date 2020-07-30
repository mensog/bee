<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">

            <div class="card no-shadow">
                <div class="card-head">
                    <header>
                        Структура категорий
                    </header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dd nestable-list">
                                <ol class="dd-list">
                                    <li class="dd-item tile" data-id="1">
                                        <div class="dd-handle btn btn-default-light">Категория 1</div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle btn btn-default-light">Категория 2</div>
                                    </li>
                                    <li class="dd-item" data-id="3">
                                        <div class="dd-handle btn btn-default-light">Категория 3</div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="4">
                                                <div class="dd-handle btn btn-default-light">Подкатегория 4</div>
                                            </li>
                                            <li class="dd-item" data-id="5">
                                                <div class="dd-handle btn btn-default-light">Подкатегория 5</div>
                                            </li>
                                            <li class="dd-item" data-id="6">
                                                <div class="dd-handle btn btn-default-light">Подкатегория 6</div>
                                            </li>
                                            <li class="dd-item" data-id="7">
                                                <div class="dd-handle btn btn-default-light">Подкатегория 7</div>
                                            </li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <form class="form-group" style="margin-top: 15px;" action="">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-content">
                                            <input type="text" class="form-control" id="groupbutton9">
                                            <label for="groupbutton9">Добавить новую категорию</label>
                                        </div>
                                        <div class="input-group-btn">
                                            <button class="btn btn-block ink-reaction btn-info" type="button">Добавить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<x-admin.footer/>
