<x-admin.header/>

<div id="content">
    <section>
        <div class="section-body">
            <h2>Работа парсера</h2>
            <p>Собрано товаров: {{ $products->count() }}</p>
            <p>Леруа Мерлен: {{ $products->where('store_id',1)->count() }}</p>
            <p>Оби: {{ $products->where('store_id',2)->count() }}</p>
            <p>Петрович: {{ $products->where('store_id',3)->count() }}</p>
            <p>Castorama: {{ $products->where('store_id',4)->count() }}</p>
        </div>
    </section>
</div>

<x-admin.footer/>

