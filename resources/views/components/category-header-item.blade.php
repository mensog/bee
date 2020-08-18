<ul class="dropdown__menu">
    @foreach($childCategories as $category)
        <li class="dropdown__menu-item">
            <a class="dropdown__menu-link" href="{{ route('category', ['name' => $category->friendly_url_name, 'storeSlug' => $currentStore->slug]) }}">{{ $category->name }}</a>
            @isset($categories[$category->id])
                @php
                    $childCategories = $categories[$category->id];
                @endphp
                <x-category-header-item :categories="$categories" :childCategories="$childCategories" :store="$store"/>
            @endisset
        </li>
    @endforeach
</ul>
