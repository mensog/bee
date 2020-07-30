<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">
            <form class="form" action="{{ route('admin_product_edit_data', $product->friendly_url_name) }}" method="post">
                @csrf
                <div class="card no-shadow">
                    <div class="card-head style-primary">
                        <header>
                            Товар - {{ $product->name }}
                        </header>
                    </div>
                    <div class="card-body floating-label">
                        <div class="form-group">
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control"
                                   id="name" required>
                            <label for="name">Название товара</label>
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="description" class="form-control"
                                      rows="1">{{ $product->description }}</textarea>
                            <label for="description">Описание</label>
                        </div>
                        @if($attributes)
                            @foreach($attributes as $attribute)
                                <div class="form-group">
                                    <input type="text" value="{{ $attribute['value'] }}" name="{{ $attribute['name'] }}"
                                           class="form-control" id="{{ $attribute['name'] }}">
                                    <label for="{{ $attribute['name'] }}">{{ $attribute['name'] }}</label>
                                </div>
                            @endforeach
                        @endif
                        <div class="form-group">
                            <input type="text" name="price" value="{{ $product->price / 100 }}"
                                   class="form-control" id="price" required>
                            <label for="price">Стоимость товара (руб)</label>
                        </div>
                    </div>
                    <div class="card-actionbar">
                        <div class="card-actionbar-row" style="text-align: left">
                            <button type="submit" class="btn btn-flat btn-primary ink-reaction">Обновить</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>

<x-admin.footer/>

