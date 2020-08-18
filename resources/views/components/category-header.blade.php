<ul class="dropdown__mainmenu">
    @isset($categories[''])
    @foreach($categories[''] as $category)
        <li class="dropdown__mainmenu-item">
            @isset($categories[$category->id])
                <a class="dropdown__mainmenu-link" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
                @php
                    $childCategories = $categories[$category->id];
                @endphp
                <x-category-header-item :categories="$categories" :childCategories="$childCategories" :store="$store"/>
            @else
                <a class="dropdown__mainmenu-link menu-last" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
            @endisset
        </li>
    @endforeach
    @endisset
</ul>
