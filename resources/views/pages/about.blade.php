<x-header/>

<main id="content" role="main" class="about">

    <section class="main-screen">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Главная</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">О сервисе</a></li>
            </ul>
            <h1 class="main-screen__title">Любые стройматериалы. <br> Привезем от 2 часов</h1>
            <h2 class="main-screen__subtitle">Мы доставляем товары и материалы из строительных магазинов в Москве</h2>
            <div class="main-screen__benefits">
                <div class="main-screen__benefits-item">
                    <div class="main-screen__benefits-title">24/7</div>
                    <div class="main-screen__benefits-descr">работаем без выходных и <br> перерывов, чтобы <br>
                        сократить время доставки
                    </div>
                </div>
                <div class="main-screen__benefits-item">
                    <div class="main-screen__benefits-title">72 <span>машины</span></div>
                    <div class="main-screen__benefits-descr">в пути, доставляют заказы <br> по Москве</div>
                </div>
                <div class="main-screen__benefits-item">
                    <div class="main-screen__benefits-title">1000 <span>заказов</span></div>
                    <div class="main-screen__benefits-descr">доставляем каждый день</div>
                </div>
            </div>
        </div>
    </section>

    <section class="shops">
        <div class="container">
            <div class="shops__heading">Наши магазины</div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="shops__item">
                            <div class="shops__item-wrap">
                                <img src="/svg/shop-icons/leroy-medium.svg" alt="leroy-merlin">
                                <div class="shops__item-title">Леруа Мерлен</div>
                                <div class="shops__item-descr">Сеть магазинов для дома и дачи</div>
                            </div>
                            <a class="shops__item-link" href="#">Смотреть каталог</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shops__item">
                            <div class="shops__item-wrap">
                                <img src="/svg/shop-icons/petrovich-medium.svg" alt="petrovich">
                                <div class="shops__item-title">Петрович</div>
                                <div class="shops__item-descr">Сеть магазинов строительных <br> материалов</div>
                            </div>
                            <a class="shops__item-link" href="#">Смотреть каталог</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shops__item">
                            <div class="shops__item-wrap">
                                <img src="/svg/shop-icons/obi-medium.svg" alt="obi">
                                <div class="shops__item-title">OBI</div>
                                <div class="shops__item-descr">Сеть магазинов для дома и сада</div>
                            </div>
                            <a class="shops__item-link" href="#">Смотреть каталог</a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="shops__item">
                            <div class="shops__item-wrap">
                                <img src="/svg/shop-icons/castorama-medium.svg" alt="castorama">
                                <div class="shops__item-title">Castorama</div>
                                <div class="shops__item-descr">Гипермаркет товаров для дома</div>
                            </div>
                            <a class="shops__item-link" href="#">Смотреть каталог</a>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>

    <section id="delivery-cost" class="delivery-cost">
        <div class="container">
            <h3 class="delivery-cost__heading">Сколько стоит доставка?</h3>
            <div class="row">
                <div class="col-3">
                    <div class="delivery-cost__item delivery-cost__item_yellow">
                        <img class="delivery-cost__item-icon" src="/svg/about/express.svg" alt="">
                        <div class="delivery-cost__item-heading">Экспресс-доставка</div>
                        <div class="delivery-cost__item-descr">Быстрая доставка в удобный <br> интервал времени</div>
                        <div class="delivery-cost__item-time">с 18:00 26.07</div>
                        <div class="delivery-cost__item-price">849 ₽</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="delivery-cost__item delivery-cost__item_white">
                        <img class="delivery-cost__item-icon" src="/svg/about/courier.svg" alt="">
                        <div class="delivery-cost__item-heading">Курьером</div>
                        <div class="delivery-cost__item-descr">Доставка в удобный день и <br> интервал времени</div>
                        <div class="delivery-cost__item-time">с 12:00 27.07</div>
                        <div class="delivery-cost__item-price">349 ₽</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="delivery-cost__item delivery-cost__item_blue">
                        <img class="delivery-cost__item-icon" src="/svg/about/night.svg" alt="">
                        <div class="delivery-cost__item-heading">Ночной тариф</div>
                        <div class="delivery-cost__item-descr">Ночная доставка с 22.00 до <br> 06.00 без пробок и
                            опозданий
                        </div>
                        <div class="delivery-cost__item-time">с 22:00 27.07</div>
                        <div class="delivery-cost__item-price">549 ₽</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="questions" class="main-qa">
        <div class="container">
            <h3 class="main-qa__header">
                Часто задаваемые вопросы
            </h3>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <p class="main-qa__small">
                        Оплата, доставка
                    </p>
                    <div class="accordion" id="accordionAbout">
                        <div class="main-qa-card">
                            <div class="main-qa-card__header" data-toggle="collapse" data-target="#accordionAboutOne"
                                 aria-expanded="true" aria-controls="accordionAboutOne">
                                <header>
                                    Какими способами я могу оплатить заказ?
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionAboutOne" class="collapse" aria-labelledby="accordionAboutOne"
                                 data-parent="#accordionAbout">
                                <div class="main-qa-card__body">
                                    <p>
                                        Всё правильно. Деньги списываются, а потом возвращаются — так устроен кэшбэк.
                                        <br>
                                        Стоимость подписки возвращается в следующем месяце — например, если вы потратили
                                        5000 в мае, 169 рублей поступят на счёт в июне.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse"
                                 data-target="#accordionAboutTwo" aria-expanded="true"
                                 aria-controls="accordionAboutTwo">
                                <header>
                                    Что входит в доставку?
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionAboutTwo" class="collapse" aria-labelledby="accordionAboutTwo"
                                 data-parent="#accordionAbout">
                                <div class="main-qa-card__body">
                                    <p>
                                        Всё правильно. Деньги списываются, а потом возвращаются — так устроен кэшбэк.
                                        <br>
                                        Стоимость подписки возвращается в следующем месяце — например, если вы потратили
                                        5000 в мае, 169 рублей поступят на счёт в июне.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse"
                                 data-target="#accordionAboutThree" aria-expanded="true"
                                 aria-controls="accordionAboutThree">
                                <header>
                                    Какие правила доставки?
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionAboutThree" class="collapse" aria-labelledby="accordionAboutThree"
                                 data-parent="#accordionAbout">
                                <div class="main-qa-card__body">
                                    <p>
                                        Всё правильно. Деньги списываются, а потом возвращаются — так устроен кэшбэк.
                                        <br>
                                        Стоимость подписки возвращается в следующем месяце — например, если вы потратили
                                        5000 в мае, 169 рублей поступят на счёт в июне.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse"
                                 data-target="#accordionAboutFour" aria-expanded="true"
                                 aria-controls="accordionOrderTwo">
                                <header>
                                    Нужно ли мне отдельно платить за разгрузку и <br> подъем?
                                    <div class="main-qa-card__img">
                                        <img src="/svg/main/accordion-arrow.svg" alt="">
                                    </div>
                                </header>
                            </div>
                            <div id="accordionAboutFour" class="collapse" aria-labelledby="accordionAboutFour"
                                 data-parent="#accordionAbout">
                                <div class="main-qa-card__body">
                                    <p>
                                        Всё правильно. Деньги списываются, а потом возвращаются — так устроен кэшбэк.
                                        <br>
                                        Стоимость подписки возвращается в следующем месяце — например, если вы потратили
                                        5000 в мае, 169 рублей поступят на счёт в июне.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="main-qa__small">
                        Отслеживание, возврат, личный счет
                    </p>
                    <div class="accordion" id="accordionOrder">
                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse"
                                 data-target="#accordionOrderOne" aria-expanded="true"
                                 aria-controls="accordionOrderOne">
                                <header>
                                    Как отследить мой заказ?
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionOrderOne" class="collapse" aria-labelledby="accordionOrderOne"
                                 data-parent="#accordionOrder">
                                <div class="main-qa-card__body">
                                    <p>
                                        Всё правильно. Деньги списываются, а потом возвращаются — так устроен кэшбэк.
                                        <br>
                                        Стоимость подписки возвращается в следующем месяце — например, если вы потратили
                                        5000 в мае, 169 рублей поступят на счёт в июне.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse"
                                 data-target="#accordionOrderTwo" aria-expanded="true"
                                 aria-controls="accordionOrderTwo">
                                <header>
                                    Как вернуть товар?
                                    <div class="main-qa-card__img">
                                        <img src="/svg/main/accordion-arrow.svg" alt="">
                                    </div>
                                </header>
                            </div>
                            <div id="accordionOrderTwo" class="collapse" aria-labelledby="accordionOrderTwo"
                                 data-parent="#accordionOrder">
                                <div class="main-qa-card__body">
                                    <p>
                                        Всё правильно. Деньги списываются, а потом возвращаются — так устроен кэшбэк.
                                        <br>
                                        Стоимость подписки возвращается в следующем месяце — например, если вы потратили
                                        5000 в мае, 169 рублей поступят на счёт в июне.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse"
                                 data-target="#accordionOrderThree" aria-expanded="true"
                                 aria-controls="accordionOrderThree">
                                <header>
                                    Какие товары принимаются к возврату?
                                    <div class="main-qa-card__img">
                                        <img src="/svg/main/accordion-arrow.svg" alt="">
                                    </div>
                                </header>
                            </div>
                            <div id="accordionOrderThree" class="collapse" aria-labelledby="accordionOrderThree"
                                 data-parent="#accordionOrder">
                                <div class="main-qa-card__body">
                                    <p>
                                        Всё правильно. Деньги списываются, а потом возвращаются — так устроен кэшбэк.
                                        <br>
                                        Стоимость подписки возвращается в следующем месяце — например, если вы потратили
                                        5000 в мае, 169 рублей поступят на счёт в июне.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse"
                                 data-target="#accordionOrderFour" aria-expanded="true"
                                 aria-controls="accordionOrderFour">
                                <header>
                                    Что такое личный счет и баллы?
                                    <div class="main-qa-card__img">
                                        <img src="/svg/main/accordion-arrow.svg" alt="">
                                    </div>
                                </header>
                            </div>
                            <div id="accordionOrderFour" class="collapse" aria-labelledby="accordionOrderFour"
                                 data-parent="#accordionOrder">
                                <div class="main-qa-card__body">
                                    <p>
                                        Всё правильно. Деньги списываются, а потом возвращаются — так устроен кэшбэк.
                                        <br>
                                        Стоимость подписки возвращается в следующем месяце — например, если вы потратили
                                        5000 в мае, 169 рублей поступят на счёт в июне.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="return-product">
        <div class="container">
            <h2 class="return-product__heading">Как вернуть товар?</h2>
            <div class="row">
                <div class="col-6">
                    <div class="return-product__item">
                        <h3 class="return-product__item-heading">1. Оформите заявку на возврат</h3>
                        <span>- Перейдите в карточку заказа</span>
                        <span>- Выберите нужный товар</span>
                        <span>- Нажмите кнопку “Вернуть” и укажите причину</span>
                    </div>
                    <div class="return-product__item">
                        <h3 class="return-product__item-heading">2. Верните товар</h3>
                        <span>- Выберите время для забора товара</span>
                        <span>- Передайте курьеру товар в назначенное время</span>
                    </div>
                    <div class="return-product__item">
                        <h3 class="return-product__item-heading">3. Получите деньги</h3>
                        <span>Мы отправим вам стоимость товара в течение 7 дней</span>
                    </div>
                </div>
                <div class="col-6">
                    <img class="return-product__img" src="/img/about/return.png" alt="return product">
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <div class="requirements">
                        <h4 class="requirements__heading">Требования к товару для возврата</h4>
                        <span>Товар, который не подошел или не понравился (надлежащего качества), можно вернуть, если:</span>
                        <span>- нет следов использования</span>
                        <span>- сохранился товарный вид</span>
                        <span>- не повреждена упаковка</span>
                        <span>- сохранились потребительские свойства (в том числе, не истек срок годности)</span>
                        <span>- Вы возвращаете весь комплект товаров (например, оба тома для книги в двух томах)</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="main-steps">
        <div class="container">
            <h3 class="main-steps__header">
                Доставка от 2 часов по Москве
            </h3>

            <div class="main-steps-row">
                <div class="main-steps-row__col">
                    <div class="main-steps-row__img">
                        <img src="/img/main/steps/step1.jpg" alt="">
                        <span class="main-steps-row__badge">1-й шаг</span>
                    </div>
                    <p class="main-steps-row__header">
                        Вы оформляйте заказ
                    </p>
                    <p class="main-steps-row__text">
                        Мы доставим ваш заказ быстро и в удобное время
                    </p>
                </div>
                <div class="main-steps-row__col">
                    <div class="main-steps-row__img">
                        <img src="/img/main/steps/step2.jpg" alt="">
                        <span class="main-steps-row__badge">2-й шаг</span>
                    </div>
                    <p class="main-steps-row__header">
                        Мы собираем заказ
                    </p>
                    <p class="main-steps-row__text">
                        Мы проверим товарный вид и целостность каждого товара в заказе
                    </p>
                </div>
                <div class="main-steps-row__col">
                    <div class="main-steps-row__img">
                        <img src="/img/main/steps/step3.jpg" alt="">
                        <span class="main-steps-row__badge">3-й шаг</span>
                    </div>
                    <p class="main-steps-row__header">
                        Доставляем Вам в удобное время
                    </p>
                    <p class="main-steps-row__text">
                        Мы доставим ваш заказ быстро и в удобное время
                    </p>
                </div>
            </div>
        </div>
    </div>

    <x-delivery/>

    <div class="contact">
        <div class="container">
            <a href="#" class="contact__improve">
                <div class="contact__improve-text">Что можно улучшить на этой странице?</div>
            </a>
        </div>
    </div>

</main>

<script>
    const hash = window.location.hash
    if (hash) {
        const hashes = hash.split('#', hash.length).filter(Boolean)
        hashes.forEach((item, index) => {
            if (index === 0) {
                let itemNode = document.getElementById(item)
                itemNode.scrollIntoView()
            } else if (index === 1) {
                let itemNode = document.querySelector(`[data-target="#${item}"]`)
                if (itemNode) {
                    setTimeout(() => {
                        itemNode.click()
                    }, 100)
                }
            }
        })
    }
</script>

<x-footer/>
