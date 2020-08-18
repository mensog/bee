<ul class="catalog__sublist">
    @foreach($childCategories as $category)
    <li class="catalog__sublist-item{{ in_array($category->friendly_url_name, $activeCategorySlugs) ? ' active' : '' }}">
        @isset($categories[$category->id])
            <a class="catalog__sublist-link" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
            @php
                $childCategories = $categories[$category->id];
            @endphp
            <x-category-sidebar-item :categories="$categories" :childCategories="$childCategories" :store="$store" :activeCategorySlugs="$activeCategorySlugs"/>
        @else
            <a class="catalog__sublist-link menu-last" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
        @endisset
    </li>
    @endforeach
</ul>
