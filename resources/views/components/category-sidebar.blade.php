<ul class="catalog__list">
    @isset($categories[''])
    @foreach($categories[''] as $category)
    <li class="catalog__list-item{{ in_array($category->friendly_url_name, $activeCategorySlugs) ? ' active' : '' }}">
        @isset($categories[$category->id])
            <a class="catalog__list-link" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
            @php
                $childCategories = $categories[$category->id];
            @endphp
            <x-category-sidebar-item :categories="$categories" :childCategories="$childCategories" :store="$store" :activeCategorySlugs="$activeCategorySlugs"/>
        @else
            <a class="catalog__list-link menu-last" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
        @endisset
    </li>
    @endforeach
    @endisset
</ul>
