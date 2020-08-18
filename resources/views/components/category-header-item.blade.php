<ul class="dropdown__menu">
    @foreach($childCategories as $category)
        <li class="dropdown__menu-item">
            @isset($categories[$category->id])
                <a class="dropdown__menu-link" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
                @php
                    $childCategories = $categories[$category->id];
                @endphp
                <x-category-header-item :categories="$categories" :childCategories="$childCategories" :store="$store"/>
            @else
                <a class="dropdown__menu-link menu-last" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
            @endisset
        </li>
    @endforeach
</ul>
