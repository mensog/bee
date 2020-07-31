<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="panel-group" id="accordion3">
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion3"
                                 data-target="#accordion3-1" aria-expanded="false">
                                <header>Атрибуты</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion3-1" class="collapse" aria-expanded="false" style="height: 0px;">
                                <div class="card-body floating-label">
                                    <form class="form" action="" method="">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" name="attrName"
                                                   class="form-control"
                                                   id="attrName" required>
                                            <label for="attrName">Название атрибута</label>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="attrVal"
                                                   class="form-control"
                                                   id="attrVal" required>
                                            <label for="attrVal">Значение атрибута</label>
                                        </div>
                                        <button type="submit" class="btn btn-block ink-reaction btn-warning">
                                            Добавить атрибут
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form id="productForm" class="form"
                          action="{{ route('admin_create_product') }}"
                          method="post">
                        @csrf
                        <div class="card card-bordered style-default-light no-shadow">
                            <div class="card-head">
                                <header>
                                    Название товара
                                </header>
                            </div>
                            <div class="card-body style-default-bright floating-label">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name"
                                                   class="form-control"
                                                   id="name" required>
                                            <label for="name">Название товара</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select id="status" name="status" class="form-control">
                                                <option value="moderate">На модерации</option>
                                                <option value="publish">Опубликован</option>
                                                <option value="private">Не опубликован</option>
                                            </select>
                                            <label for="status">Модерация</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="form-control select2-list"
                                                    data-placeholder="Выберите курьера">
                                                <optgroup label="Одноуровневая вложенность">
                                                    <option value="none">
                                                        {{ $product->category->name }}
                                                    </option>
                                                </optgroup>
                                            </select>
                                            <label>Выберите категорию</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="price"
                                                   class="form-control" id="price" data-rule-digits="true" required>
                                            <label for="price">Стоимость товара (руб)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="description" id="description" class="form-control"
                                              rows="2"></textarea>
                                    <label for="description">Описание</label>
                                </div>

                                <div class="form-group">
                                    <input type="file" data-max-files="3" multiple
                                           id="productImage">
                                </div>

                            </div>
                            <div class="card-actionbar style-default-bright">
                                <div class="card-actionbar-row" style="text-align: left">
                                    <button type="submit" class="btn btn-flex ink-reaction btn-warning">
                                        Опубликовать
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>

<x-admin.footer/>

