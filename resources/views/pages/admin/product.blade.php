<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card card-bordered style-default-light no-shadow">
                        <div class="card-head">
                            <header>
                                Партнер
                            </header>
                        </div>
                        <div class="card-body style-default-bright">
                            <div>
                                Название партнера
                                <span class="pull-right">
                                    Оби
                                </span>
                            </div>
                            <div>
                                ФИО
                                <span class="pull-right">
                                    Иванов Иван Иванович
                                </span>
                            </div>
                            <div>
                                Телефон
                                <span class="pull-right">
                                    +799999999
                                </span>
                            </div>
                        </div>
                    </div>
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
                                        <button type="submit" class="btn btn-flex ink-reaction btn-warning">
                                            Добавить атрибут
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-group" id="accordion1">
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion1"
                                 data-target="#accordion1-1" aria-expanded="false">
                                <header>Парсер выключен</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion1-1" class="collapse" aria-expanded="false" style="height: 0px;">
                                <div class="card-body">
                                    <div>
                                        Дата обновления
                                        <span class="pull-right">
                                            {{ date('d.m.Y H:i',strtotime($product->last_parse)) }}
                                        </span>
                                    </div>
                                    <form action="" class="form" method="">
                                        <div class="btn-group mb"
                                             style="margin-bottom: 15px; margin-top: 15px;"
                                             data-toggle="buttons">
                                            <label class="btn ink-reaction btn-default">
                                                <input type="radio" class="parserToggle" name="parserOn"
                                                       id="parserOn"><i
                                                    class="md md-done "></i>
                                                Вкл
                                            </label>
                                            <label class="btn ink-reaction btn-default">
                                                <input type="radio" class="parserToggle" name="parserOff" checked
                                                       id="parserOff"><i
                                                    class="md md-highlight-remove"></i> Выкл
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="parseTitle" class="parserOption" name="parseTitle"
                                                       type="checkbox">
                                                <span>Парсить заголовок</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="parseDesc" class="parserOption" name="parseDesc"
                                                       type="checkbox">
                                                <span>Парсить описание</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="parseImage" class="parserOption" name="parseImage"
                                                       type="checkbox">
                                                <span>Парсить картинки</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="parseAttr" class="parserOption" name="parseAttr"
                                                       type="checkbox">
                                                <span>Парсить атрибуты</span>
                                            </label>
                                        </div>
                                        <div class="checkbox checkbox-styled">
                                            <label>
                                                <input id="parsePrice" class="parserOption" name="parsePrice"
                                                       type="checkbox">
                                                <span>Парсить цену</span>
                                            </label>
                                        </div>
                                        <button class="btn btn-block ink-reaction btn-warning">
                                            Сохранить
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form id="productForm" class="form"
                          action="{{ route('admin_product_edit_data', $product->friendly_url_name) }}"
                          method="post">
                        @csrf
                        <div class="card card-bordered style-default-light no-shadow">
                            <div class="card-head">
                                <header>
                                    {{ $product->name }}
                                </header>
                            </div>
                            <div class="card-body style-default-bright floating-label">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" value="{{ $product->name }}"
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
                                            <input type="text" name="price" value="{{ $product->price / 100 }}"
                                                   class="form-control" id="price" data-rule-digits="true" required>
                                            <label for="price">Стоимость товара (руб)</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="description" id="description" class="form-control"
                                              rows="2">{{ $product->description }}</textarea>
                                    <label for="description">Описание</label>
                                </div>

                                <div class="form-group">
                                    <input type="file" data-max-files="3" multiple data-path="{{ $product->img_url }}"
                                           id="productImage">
                                </div>

                            </div>
                            <div class="card-actionbar style-default-bright">
                                <div class="card-actionbar-row" style="text-align: left">
                                    <button type="submit" class="btn btn-flex ink-reaction btn-warning">
                                        Сохранить
                                    </button>
                                    <a class="btn btn-flex btn-danger ink-reaction"
                                       data-action=""
                                       data-text="товар"
                                       data-toggle="modal" data-target="#deleteModal">
                                        Удалить
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="panel-group" id="accordion-attrs">
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion-attrs"
                                 data-target="#accordion-attrs-1" aria-expanded="false">
                                <header>
                                    Редактирование атрибутов
                                </header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion-attrs-1" class="collapse" aria-expanded="false" style="height: 0px;">
                                <form id="productAttrsForm" action="" class="form" method="">
                                    <div class="card-body no-shadow floating-label">
                                        <div class="row">
                                            @if($attributes)
                                                @foreach($attributes as $attribute)
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-content">
                                                                    <input type="text" value="{{ $attribute['value'] }}"
                                                                           name="{{ $attribute['name'] }}"
                                                                           class="form-control"
                                                                           id="{{ $attribute['name'] }}">
                                                                    <label
                                                                        for="{{ $attribute['name'] }}">{{ $attribute['name'] }}</label>
                                                                </div>
                                                                <div class="input-group-btn">
                                                                    <button class="btn btn-flat btn-danger btn-default"
                                                                            type="button">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-actionbar style-default-bright">
                                        <div class="card-actionbar-row" style="text-align: left">
                                            <button type="submit" class="btn btn-flex ink-reaction btn-warning">
                                                Сохранить
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="panel-group" id="accordion2">
                        <div class="card panel">
                            <div class="card-head collapsed" data-toggle="collapse" data-parent="#accordion2"
                                 data-target="#accordion2-1" aria-expanded="false">
                                <header>Отзывы</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                                </div>
                            </div>
                            <div id="accordion2-1" class="collapse" aria-expanded="false" style="height: 0px;">
                                <div class="card-body no-shadow">
                                    <div class="table-responsive" style="overflow: visible">
                                        <table id="orders" class="table table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="sort-numeric">Дата</th>
                                                <th class="sort-alpha">Статус</th>
                                                <th class="sort-alpha">Автор</th>
                                                <th class="sort-alpha">Отзыв</th>
                                                <th class="sort-numeric">Оценка</th>
                                                <th class="sort-numeric">Ответ</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>22.06.2020 14:42</td>
                                                <td>На модерации</td>
                                                <td>Иванов Иван</td>
                                                <td>Очень хорошо, класс!</td>
                                                <td>10/10</td>
                                                <td>-</td>
                                                <td data-toggle="tooltip" data-placement="bottom"
                                                    data-trigger="hover"
                                                    data-original-title="Опубликовать">
                                                    <a data-target="#publishCommentModal" data-toggle="modal"
                                                       data-action class="btn btn-flat ink-reaction btn-success">
                                                        <i class="md md-publish"></i>
                                                    </a>
                                                </td>
                                                <td data-toggle="tooltip" data-placement="bottom"
                                                    data-trigger="hover"
                                                    data-original-title="Ответить">
                                                    <a class="btn btn-flat ink-reaction btn-default"
                                                       data-action=""
                                                       data-toggle="modal"
                                                       data-target="#replyCommentModal">
                                                        <i class="md md-reply"></i>
                                                    </a>
                                                </td>
                                                <td data-toggle="tooltip" data-placement="bottom"
                                                    data-trigger="hover"
                                                    data-original-title="Удалить">
                                                    <a class="btn btn-flat ink-reaction btn-danger"
                                                       data-action=""
                                                       data-text="отзыв"
                                                       data-toggle="modal" data-target="#deleteModal">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="replyCommentModal" tabindex="-1" role="dialog"
                         aria-labelledby="replyCommentModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="replyCommentModalLabel">Ответить на комментарий</h4>
                                </div>
                                <form id="replyCommentModalForm" class="form-horizontal" method="" action="">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <label for="email1" class="control-label">Администратор</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="email" value="Администратор" name="author" id="author"
                                                       class="form-control"
                                                       placeholder="Администратор">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <label for="text" class="control-label">Комментарий</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <textarea name="text" id="text" class="form-control"
                                                          placeholder="Текст ответа">Текст ответа</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button onclick="event.preventDefault()" type="button" class="btn btn-default"
                                                data-dismiss="modal">Отмена
                                        </button>
                                        <button type="submit" class="btn btn-primary">Ответить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="publishCommentModal" tabindex="-1" role="dialog"
                         aria-labelledby="publishCommentModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="publishCommentModalLabel">Публикация комментария</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Вы действительно хотите опубликовать комментарий?
                                </div>
                                <div class="modal-footer">
                                    <form id="publishCommentModalForm" class="form" method="" action="">
                                        @csrf
                                        <button onclick="event.preventDefault()" type="button" class="btn btn-default"
                                                data-dismiss="modal">Отмена
                                        </button>
                                        <button type="submit" class="btn btn-primary">Опубликовать</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<x-admin.footer/>

