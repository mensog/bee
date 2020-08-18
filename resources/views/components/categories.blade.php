<div class="categories">
    <div class="container">
        <h2 class="categories__heading">Категории</h2>
        <div class="categories__items">
            <a href="#" class="categories__item">
                <span class="categories__item-descr">Скобяные <br> изделия</span>
                <img class="categories__item-img" src="/svg/components/categories/hardware.svg" alt="">
            </a>
            <a href="#" class="categories__item">
                <span class="categories__item-descr">Плитка</span>
                <img class="categories__item-img" src="/svg/components/categories/tile.svg" alt="">
            </a>
            <a href="#" class="categories__item">
                <span class="categories__item-descr">Окна и двери</span>
                <img class="categories__item-img" src="/svg/components/categories/window.svg" alt="">
            </a>
            <a href="#" class="categories__item">
                <span class="categories__item-descr">Электротовары</span>
                <img class="categories__item-img" src="/svg/components/categories/electrical.svg" alt="">
            </a>
            <a href="{{ route('catalog',['storeSlug' => $currentStore->slug]) }}" class="categories__item categories__item_empty">
                <span class="categories__item-descr">Ещё 15 категорий</span>
            </a>
        </div>
    </div>
</div>
