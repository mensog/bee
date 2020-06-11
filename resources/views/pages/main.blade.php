<x-header/>

<main id="content" role="main">
    <div class="mb-4">
        <div class="bg-img-hero" style="background-image: url(/img/1920X422/img1.jpg);">
            <div class="container overflow-hidden">
                <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                    @foreach ($bannerProducts as $key=>$bannerProduct)
                        <div class="item">
                            <div class="row pt-7 py-md-0">
                                <div class="d-none d-wd-block offset-1"></div>
                                <div class="col-xl-4 col-6 col-md-6 mt-md-8 mt-lg-10">
                                    <div class="ml-xl-4">
                                        <h6 class="font-size-15 font-weight-bold mb-2 text-cyan"
                                            data-scs-animation-in="fadeInUp">
                                            {{$bannerProduct->category->name}}
                                        </h6>
                                        <h1 class="font-size-36 text-lh-50 font-weight-light mb-8"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">
                                            {{$bannerProduct->name}}
                                        </h1>
                                        <a href="{{route('product', $bannerProduct->friendly_url_name)}}"
                                           class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                           data-scs-animation-in="fadeInUp"
                                           data-scs-animation-delay="300">
                                            Подробнее
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-md-6 col-6 d-flex align-items-end ml-auto ml-md-0"
                                     data-scs-animation-in="fadeInRight"
                                     data-scs-animation-delay="500">
                                    <img class="img-fluid ml-auto mr-10 mr-wd-auto"
                                         src="{{$key === 0 ? '/img/468X417/img1.png' : '/img/416X420/img1.png'}}"
                                         alt="Image Description">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mb-6 row border rounded-lg mx-0 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
            <div class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-transport font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Бесплатная доставка</span>
                    <div class=" text-secondary">от 5000 рублей</div>
                </div>
            </div>

            <div
                class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-customers font-size-56"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Более 7000 отзывов</span>
                    <div class=" text-secondary">от покупателей</div>
                </div>
            </div>

            <div
                class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-payment font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Удобная оплата</span>
                    <div class=" text-secondary">При получении заказа</div>
                </div>
            </div>

            <div
                class="media col px-6 px-xl-4 px-wd-8 flex-shrink-0 flex-xl-shrink-1 min-width-270-all border-left py-3">
                <div class="u-avatar mr-2">
                    <i class="text-primary ec ec-tag font-size-46"></i>
                </div>
                <div class="media-body text-center">
                    <span class="d-block font-weight-bold text-dark">Регулярные акции</span>
                    <div class=" text-secondary">на лучшие товары</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mb-6 position-relative">
            <div
                class="d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                <h3 class="section-title section-title__full mb-0 pb-2 font-size-22">Последние добавления</h3>
            </div>
            <div class="owl-carousel owl-inner-nav owl-ui-sm">
                <div class="item">
                    <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        @foreach($recentProducts as $recentProduct)
                            <li class="col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                <div class="product-item__outer h-100 w-100">
                                    <div class="product-item__inner p-md-3 row no-gutters">
                                        <div class="col col-lg-auto col-xl-5 col-wd-auto product-media-left">
                                            <a href="{{route('product', $recentProduct->friendly_url_name)}}"
                                               class="max-width-150 d-block"><img
                                                    class="img-fluid" src="{{$recentProduct->img_url}}"
                                                    alt="{{$recentProduct->name}}"></a>
                                        </div>
                                        <div
                                            class="col col-xl-7 col-wd product-item__body pl-2 pl-lg-3 pl-xl-0 pl-wd-3 mr-wd-1">
                                            <div class="mb-4 mb-xl-2 mb-wd-6">
                                                <div class="mb-2"><span
                                                        class="font-size-12 text-gray-5">Добавлено {{$recentProduct->created_at}}</span>
                                                </div>
                                                <h5 class="product-item__title"><a
                                                        href="{{route('product', $recentProduct->friendly_url_name)}}"
                                                        class="text-blue font-weight-bold">{{$recentProduct->name}}</a>
                                                </h5>
                                            </div>
                                            <div class="flex-center-between mb-3">
                                                <div class="prodcut-price">
                                                    <div class="text-gray-100">{{$recentProduct->price / 100}}руб
                                                    </div>
                                                </div>
                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                    <a href="{{route('add_to_cart', ['product-id' => $recentProduct->id, 'quantity' => 1] )}}"
                                                       class="btn-add-cart btn-primary transition-3d-hover"><i
                                                            class="ec ec-add-to-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @if($loop->iteration % 6 === 0)
                    </ul>
                </div>
                @if($loop->iteration !== 18)
                    <div class="item">
                        <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                        @endif
                        @endif
                        @endforeach
                    </div>
            </div>
        </div>
</main>


<x-footer/>
