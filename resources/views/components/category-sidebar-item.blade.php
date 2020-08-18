<ul class="catalog__sublist">
    @foreach($childCategories as $category)
    <li class="catalog__sublist-item{{ in_array($category->friendly_url_name, $activeCategorySlugs) ? ' active' : '' }}">
        <a class="catalog__sublist-link" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
        @isset($categories[$category->id])
            @php
                $childCategories = $categories[$category->id];
            @endphp
            <x-category-sidebar-item :categories="$categories" :childCategories="$childCategories" :store="$store" :activeCategorySlugs="$activeCategorySlugs"/>
        @endisset
    </li>
    @endforeach
</ul>
