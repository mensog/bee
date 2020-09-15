<div class="liked">

    <div class="container">
        <h2 class="liked__heading">Покупателям нравится</h2>
        <div class="row">

            @foreach($likedRandomProducts as $likedRandomProduct)
                <div class="col-3">
                    <a href="#" class="liked__item">
                        <div class="liked__item-body">
                            <img class="liked__item-img" src="{{ $likedRandomProduct->img_url  }}" alt="">
                            <button class="liked__item-favorite">
                                <img src="/svg/components/liked/heart-empty.svg" alt="">
                            </button>
                            <div class="liked__item-descr">{{ $likedRandomProduct->name }}<br> кг</div>
                            <div class="liked__item-article">{{ $likedRandomProduct->sku }}</div>
                        </div>
                        <div class="liked__item-footer">
                            <div class="liked__item-price"><span>{{ $likedRandomProduct->price }}₽</span> / за 1 шт</div>
                            <button class="liked__item-btn btn btn-primary">В корзину</button>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>
