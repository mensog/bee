<ul class="catalog__list">
    @isset($categories[''])
    @foreach($categories[''] as $category)
        @isset($categories[$category->id])
            <li class="catalog__list-item{{ in_array($category->friendly_url_name, $activeCategorySlugs) ? ' active' : '' }}">
            <a class="catalog__list-link" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
            @php
                $childCategories = $categories[$category->id];
            @endphp
            <x-category-sidebar-item :categories="$categories" :childCategories="$childCategories" :store="$store" :activeCategorySlugs="$activeCategorySlugs"/>
        @else
            <li class="catalog__list-item menu-last{{ in_array($category->friendly_url_name, $activeCategorySlugs) ? ' active' : '' }}">
            <a class="catalog__list-link" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
        @endisset
    </li>
    @endforeach
    @endisset
</ul>
