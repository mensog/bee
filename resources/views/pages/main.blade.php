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
                        <div class="main-map-shops__item active border-lm main-map-toggle" data-map="lm">
                            <img src="/svg/shop-icons/leroy-merlin.svg" alt="">
                        </div>
                        <div class="main-map-shops__item border-petr main-map-toggle" data-map="petr">
                            <img src="/svg/shop-icons/petrovich.svg" alt="">
                        </div>
                        <div class="main-map-shops__item border-obi main-map-toggle" data-map="obi">
                            <img src="/svg/shop-icons/obi.svg" alt="">
                        </div>
                        <div class="main-map-shops__item border-cr main-map-toggle" data-map="cr">
                            <img src="/svg/shop-icons/castorama.svg" alt="">
                        </div>
                        <div class="main-map-shops__item">
                            <p>Другие магазины</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 main-map-points">
                    <svg id="lm" class="active main-map-points__item" width="412" height="430" viewBox="0 0 412 430"
                         fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="252" cy="30" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="57" cy="136" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="119" cy="128" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="186" cy="8" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="82" cy="18" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="392" cy="299" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="404" cy="236" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="280" cy="204" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="294" cy="230" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="212" cy="422" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="39" cy="370" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="8" cy="132" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="227" cy="278" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="249" cy="165" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                    </svg>
                    <svg id="petr" class="main-map-points__item" width="474" height="446" viewBox="0 0 474 446" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="230" cy="8" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="8" cy="144" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="466" cy="125" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="449" cy="293" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="269" cy="438" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="271" cy="326" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                    </svg>
                    <svg id="obi" class="main-map-points__item" width="418" height="390" viewBox="0 0 418 390" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="167" cy="193" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="180" cy="132" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="102" cy="284" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="163" cy="382" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="258" cy="327" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="410" cy="294" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="41" cy="26" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="8" cy="147" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="102" cy="8" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                    </svg>
                    <svg id="cr" class="main-map-points__item" width="413" height="175" viewBox="0 0 413 175" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="233" cy="167" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                        <circle cx="405" cy="27" r="5.5" stroke="#E3E3E3" stroke-width="5"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <x-delivery/>

    <div class="main-sales">
        <div class="container">
            <h3 class="main-sales__header">Акции и спецпредложения</h3>
            <div class="main-sales-cards">
                <div class="main-sales-cards__item main-sales-cards__register-card">
                    <p class="main-sales-cards__header ">
                        200 баллов
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        за регистрацию
                    </p>
                </div>
                <div class="main-sales-cards__item main-sales-cards__second">
                    <p class="main-sales-cards__header">
                        2% баллов
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        на второй заказ
                    </p>
                </div>
                <div class="main-sales-cards__item main-sales-cards__app">
                    <p class="main-sales-cards__header">
                        200 баллов
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        за установку приложения
                    </p>
                </div>
                <div class="main-sales-cards__item main-sales-cards__second">
                    <p class="main-sales-cards__header">
                        200 баллов
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        за регистрацию
                    </p>
                </div>
                <div class="main-sales-cards__item main-sales-cards__sale">
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

    <div class="contact">
        <div class="container">
            <div class="contact__inner">
                <h2 class="contact__title">Если остались вопросы - <br> обязательно ответим</h2>
                <div class="contact__wrap">
                    <form action="#" class="contact__form">
                        <div class="contact__form-group">
                            <input class="contact__form-input" type="text" name="name" placeholder="Имя">
                            <input class="contact__form-input" type="text" name="phone" placeholder="Телефон">
                        </div>
                        <textarea class="contact__form-textarea" name="questions" placeholder="Ваш вопрос"></textarea>
                        <button class="contact__form-btn btn" type="submit">Отправить</button>
                        <span class="contact__form-send">Отправляя свои данные, вы соглашаетесь на обработку персональных данных</span>
                    </form>
                    <div class="contact__box">
                        <div class="contact__box-descr">Или свяжитесь с нами любым удобным способом</div>
                        <a class="contact__box-phone" href="tel:+79000000000">+7(900) 000-00-00</a>
                        <div class="contact__social">
                            <a href="#" class="contact__social-item">WhatsApp</a>
                            <a href="#" class="contact__social-item">Telegram</a>
                            <a href="#" class="contact__social-item">Viber</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="contact__improve">
                <div class="contact__improve-text">Что можно улучшить на этой странице?</div>
            </a>
        </div>
    </div>

</main>

<x-footer/>
