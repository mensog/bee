<x-header/>

<main id="content" role="main">

    <div class="main-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-0">
                    <h2 class="main-map__header">
                        BeeClub - единая доставка товаров из строительных магазинов
                    </h2>
                    <div class="main-map-shops">
                        <div class="main-map-shops__item active">
                            <img src="/svg/shop-icons/leroy-merlin.svg" alt="">
                        </div>
                        <div class="main-map-shops__item">
                            <img src="/svg/shop-icons/petrovich.svg" alt="">
                        </div>
                        <div class="main-map-shops__item">
                            <img src="/svg/shop-icons/obi.svg" alt="">
                        </div>
                        <div class="main-map-shops__item">
                            <img src="/svg/shop-icons/castorama.svg" alt="">
                        </div>
                        <div class="main-map-shops__item">
                            <p>Другие магазины</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-delivery/>

    <div class="main-sales">
        <div class="container">
            <h3 class="main-sales__header">Акции и спецпредложения</h3>
            <div class="main-sales-cards">
                <div class="main-sales-cards__item">
                    <p class="main-sales-cards__header">
                        200 баллов
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        за регистрацию
                    </p>
                </div>
                <div class="main-sales-cards__item">
                    <p class="main-sales-cards__header">
                        2% баллов
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        на второй заказ
                    </p>
                </div>
                <div class="main-sales-cards__item">
                    <p class="main-sales-cards__header">
                        200 баллов
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        за установку приложения
                    </p>
                </div>
                <div class="main-sales-cards__item">
                    <p class="main-sales-cards__header">
                        200 баллов
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        за регистрацию
                    </p>
                </div>
                <div class="main-sales-cards__item">
                    <p class="main-sales-cards__header">
                        Еще 25 акций
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        Скидки, бонусные предложения
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-steps">
        <div class="container">
            <h3 class="main-steps__header">
                Как мы работаем?
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

    <div class="main-qa">
        <div class="container">
            <h3 class="main-qa__header">
                Часто задаваемые вопросы
            </h3>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <p class="main-qa__small">
                        О сервисе, доставка
                    </p>
                    <div class="accordion" id="accordionService">
                        <div class="main-qa-card">
                            <div class="main-qa-card__header" data-toggle="collapse" data-target="#accordionServiceOne"
                                 aria-expanded="true" aria-controls="accordionServiceOne">
                                <header>
                                    Зачем мне пользоваться сервисом BeeClub?
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionServiceOne" class="collapse show" aria-labelledby="accordionServiceOne"
                                 data-parent="#accordionService">
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
                                 data-target="#accordionServiceTwo"
                                 aria-expanded="true" aria-controls="accordionServiceTwo">
                                <header>
                                    Сколько стоит доставка?
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionServiceTwo" class="collapse" aria-labelledby="accordionServiceTwo"
                                 data-parent="#accordionService">
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
                                 data-target="#accordionServiceThree"
                                 aria-expanded="true" aria-controls="accordionServiceThree">
                                <header>
                                    Если я закажу товары из разных магазинов, сколько раз мне платить за доставку?
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionServiceThree" class="collapse" aria-labelledby="accordionServiceThree"
                                 data-parent="#accordionService">
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
                        Заказ, отслеживание
                    </p>
                    <div class="accordion" id="accordionOrder">
                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse"
                                 data-target="#accordionOrderOne"
                                 aria-expanded="true" aria-controls="accordionOrderOne">
                                <header>
                                    Нужно ли мне регистрироваться для оформления заказа?
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
                                 data-target="#accordionOrderTwo"
                                 aria-expanded="true" aria-controls="accordionOrderTwo">
                                <header>
                                    Как отследить свой заказ?
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
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="main-qa__small">
                        Другое
                    </p>
                    <div class="accordion" id="accordionOther">
                        <div class="main-qa-card">
                            <div class="main-qa-card__header" data-toggle="collapse" data-target="#accordionOtherOne"
                                 aria-expanded="true" aria-controls="accordionOtherOne">
                                <header>
                                    Если остались вопросы, обязательно на них ответим
                                </header>
                            </div>
                            <div id="accordionOtherOne" class="collapse show" aria-labelledby="accordionOtherOne"
                                 data-parent="#accordionOther">
                                <div class="main-qa-card__body">
                                    <p class="main-qa-card__contacts">
                                        Cвяжитесь с нами любым удобным способом
                                        <a href="tel:+7(900) 000-00-00">
                                            +7(900) 000-00-00
                                        </a>
                                    </p>
                                    <div class="main-qa-card__social">
                                        <a href="tel:+7(900) 000-00-00">
                                            <img src="/svg/main/phone.svg" alt="">
                                        </a>
                                        <a href="tel:+7(900) 000-00-00">
                                            <img src="/svg/main/whatsapp.svg" alt="">
                                        </a>
                                        <a href="tel:+7(900) 000-00-00">
                                            <img src="/svg/main/telegram.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<x-footer/>
