<div id="passwordChanged" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Изменение пароля</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Пароль успешно изменен</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="app-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="app-banner__body">
                    <span class="app-banner__badge">{{ __('loc.SOON') }}</span>
                    <p class="app-banner__header">
                        {{ __('loc.shopping_is_more_convenient') }}
                    </p>
                    <p class="app-banner__text">
                        <span>%</span>
                        {{ __('loc.more_discounts_and_promotions') }}
                    </p>
                    <div class="app-banner-links">
                        <a class="app-banner-links__item" href="">
                            <img src="/img/main/app-banner/play-market.png" alt="">
                        </a>
                        <a class="app-banner-links__item" href="">
                            <img src="/img/main/app-banner/app-store.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12" style="margin-top: auto; margin-left: auto; margin-right: auto;">
                <img src="/img/main/app-banner/phones.png" alt="">
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <p class="footer__logo">
                    <img src="{{ asset('/svg/main/BeeClub.svg') }}" alt="beeclub">
                </p>
                <a class="footer__link">{{ __('loc.footer.user_agreement') }}</a>
            </div>
            <div class="col-lg-2">
                <p class="footer__header">{{ __('loc.footer.buyers') }}</p>
                <a class="footer__link" href="">{{ __('loc.footer.about_service') }}</a>
                <a class="footer__link" href="">{{ __('loc.footer.delivery') }}</a>
            </div>
            <div class="col-lg-2">
                <p class="footer__header">{{ __('loc.footer.couriers') }}</p>
                <a class="footer__link" href="">{{ __('loc.footer.how_much_money') }}</a>
                <a class="footer__link" href="">{{ __('loc.footer.become_a_courier') }}</a>
            </div>
            <div class="col-lg-2">
                <p class="footer__header">{{ __('loc.footer.suppliers') }}</p>
                <a class="footer__link" href="">{{ __('loc.footer.what_conditions') }}</a>
                <a class="footer__link" href="">{{ __('loc.footer.become_a_supplier') }}</a>
            </div>
            <div class="col-lg-2">
                <p class="footer__header">{{ __('loc.footer.contacts') }}</p>
                <a class="footer__link" href="">beeclub@example.com</a>
                <a class="footer__link" href="">+7 (900) 588 22 22</a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="text-center">
                Beeclub 2023
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

@if($passwordChanged)
<script>
    $('#passwordChanged').modal('show')
</script>
@endif

<script>
    $('.owl-carousel').owlCarousel({
        animateOut: 'fadeOut',
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        stopOnHover: true,
        nav: false,
        lazyLoad: true,
        stagePadding: 0,
        dots: true,
        responsive: {
            0: {
                items: 1
            }
        }
    })
</script>
</body>

</html>