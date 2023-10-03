<x-header />

<main id="content" role="main">

    <div class="main-map">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-0">
                    <h2 class="main-map__header">
                        {{__('loc.delivery_service')}}
                    </h2>
                    <div class="main-map-shops">
                        <div class="main-map-shops__item border-petr main-map-toggle" data-map="petr">
                            <img style="height: 90%; width: 95%;" src="/svg/shop-icons/bauhaus_logo.svg" alt="">
                        </div>
                        <div class="main-map-shops__item border-obi main-map-toggle" data-map="obi">
                            <img style="height: 90%; width: 95%;" src="/svg/shop-icons/ikea_logo.png" alt="">
                        </div>
                        <div class="main-map-shops__item border-cr main-map-toggle" data-map="cr">
                            <img style="height: 90%; width: 95%;" src="/svg/shop-icons/koctas.jpeg" alt="">
                        </div>
                        <div class="main-map-shops__item active border-lm main-map-toggle" data-map="lm">
                            <img style="height: 90%; width: 95%;" src="/svg/shop-icons/tekzen_e.jpeg" alt="">
                        </div>
                        <div class="main-map-shops__item">
                            <p>{{ __('loc.other_stores') }}</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6 main-map-points">
                    <svg id="lm" class="active main-map-points__item" width="412" height="430" viewBox="0 0 412 430" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="252" cy="30" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="57" cy="136" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="119" cy="128" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="186" cy="8" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="82" cy="18" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="392" cy="299" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="404" cy="236" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="280" cy="204" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="294" cy="230" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="212" cy="422" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="39" cy="370" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="8" cy="132" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="227" cy="278" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="249" cy="165" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                    </svg>
                    <svg id="petr" class="main-map-points__item" width="474" height="446" viewBox="0 0 474 446" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="230" cy="8" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="8" cy="144" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="466" cy="125" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="449" cy="293" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="269" cy="438" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="271" cy="326" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                    </svg>
                    <svg id="obi" class="main-map-points__item" width="418" height="390" viewBox="0 0 418 390" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="167" cy="193" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="180" cy="132" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="102" cy="284" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="163" cy="382" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="258" cy="327" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="410" cy="294" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="41" cy="26" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="8" cy="147" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="102" cy="8" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                    </svg>
                    <svg id="cr" class="main-map-points__item" width="413" height="175" viewBox="0 0 413 175" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="233" cy="167" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                        <circle cx="405" cy="27" r="5.5" stroke="#E3E3E3" stroke-width="5" />
                    </svg>
                </div> -->
            </div>
        </div>
    </div>

    <x-delivery />

    <div class="main-sales">
        <div class="container">
            <h3 class="main-sales__header">{{ __('loc.promotions_special_offers') }}</h3>
            <div class="main-sales-cards">
                <div class="main-sales-cards__item main-sales-cards__register-card">
                    <p class="main-sales-cards__header ">
                        200 {{ __('loc.balls') }}
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        {{ __('loc.for_registration') }}
                    </p>
                </div>
                <div class="main-sales-cards__item main-sales-cards__second">
                    <p class="main-sales-cards__header">
                        2% {{ __('loc.balls') }}
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        {{ __('loc.on_the_second_order') }}
                    </p>
                </div>
                <div class="main-sales-cards__item main-sales-cards__app">
                    <p class="main-sales-cards__header">
                        200 {{ __('loc.balls') }}
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        {{ __('loc.for_installing_application') }}
                    </p>
                </div>
                <div class="main-sales-cards__item main-sales-cards__second">
                    <p class="main-sales-cards__header">
                        200 {{ __('loc.balls') }}
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        {{ __('loc.for_registration') }}
                    </p>
                </div>
                <div class="main-sales-cards__item main-sales-cards__sale">
                    <p class="main-sales-cards__header">
                        {{ __('loc.more_shares') }}
                        <img src="/svg/main/arrow-right.svg" alt="">
                    </p>
                    <p class="main-sales-cards__text">
                        {{ __('loc.discounts_bonus_offers') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-steps">
        <div class="container">
            <h3 class="main-steps__header">
                {{ __('loc.how_we_work') }}
            </h3>

            <div class="main-steps-row">
                <div class="main-steps-row__col">
                    <div class="main-steps-row__img">
                        <img src="/img/main/steps/step1.jpg" alt="">
                        <span class="main-steps-row__badge">{{ __('loc.step') }} 1</span>
                    </div>
                    <p class="main-steps-row__header">
                        {{ __('loc.you_place_an_order') }}
                    </p>
                    <p class="main-steps-row__text">
                        {{ __('loc.we_will_deliver_your_order_quickly') }}
                    </p>
                </div>
                <div class="main-steps-row__col">
                    <div class="main-steps-row__img">
                        <img src="/img/main/steps/step2.jpg" alt="">
                        <span class="main-steps-row__badge">{{ __('loc.step') }} 2</span>
                    </div>
                    <p class="main-steps-row__header">
                        {{ __('loc.we_collect_your_orders') }}
                    </p>
                    <p class="main-steps-row__text">
                        {{ __('loc.well_check_the_merchandise') }}
                    </p>
                </div>
                <div class="main-steps-row__col">
                    <div class="main-steps-row__img">
                        <img src="/img/main/steps/step3.jpg" alt="">
                        <span class="main-steps-row__badge">{{ __('loc.step') }} 3</span>
                    </div>
                    <p class="main-steps-row__header">
                        {{ __('loc.delivered_to_you_at_your_convenience') }}
                    </p>
                    <p class="main-steps-row__text">
                        {{ __('loc.we_will_deliver_your_order_quickly') }}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="main-qa">
        <div class="container">
            <h3 class="main-qa__header">
                {{ __('loc.common_question.faq') }}
            </h3>

            <div class="row">
                <div class="col-lg-6 col-12">
                    <p class="main-qa__small">
                        {{ __('loc.common_question.about') }}
                    </p>
                    <div class="accordion" id="accordionService">
                        <div class="main-qa-card">
                            <div class="main-qa-card__header" data-toggle="collapse" data-target="#accordionServiceOne" aria-expanded="true" aria-controls="accordionServiceOne">
                                <header>
                                    {{ __('loc.common_question.why_would_i_use') }}
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionServiceOne" class="collapse show" aria-labelledby="accordionServiceOne" data-parent="#accordionService">
                                <div class="main-qa-card__body">
                                    <p>
                                        {{ __('loc.common_question.all_right') }}
                                        <br>
                                        {{ __('loc.common_question.follow_price') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse" data-target="#accordionServiceTwo" aria-expanded="true" aria-controls="accordionServiceTwo">
                                <header>
                                    {{ __('loc.common_question.how_much_does_it_cost') }}
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionServiceTwo" class="collapse" aria-labelledby="accordionServiceTwo" data-parent="#accordionService">
                                <div class="main-qa-card__body">
                                    <p>
                                        {{ __('loc.common_question.all_right') }}
                                        <br>
                                        {{ __('loc.common_question.follow_price') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse" data-target="#accordionServiceThree" aria-expanded="true" aria-controls="accordionServiceThree">
                                <header>
                                    {{ __('loc.common_question.if_i_order_merchandise') }}
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionServiceThree" class="collapse" aria-labelledby="accordionServiceThree" data-parent="#accordionService">
                                <div class="main-qa-card__body">
                                    <p>
                                        {{ __('loc.common_question.all_right') }}
                                        <br>
                                        {{ __('loc.common_question.follow_price') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="main-qa__small">
                        {{ __('loc.common_question.order') }}
                    </p>
                    <div class="accordion" id="accordionOrder">
                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse" data-target="#accordionOrderOne" aria-expanded="true" aria-controls="accordionOrderOne">
                                <header>
                                    {{ __('loc.common_question.do_i_need_to_register') }}
                                    <img src="/svg/main/accordion-arrow.svg" alt="">
                                </header>
                            </div>
                            <div id="accordionOrderOne" class="collapse" aria-labelledby="accordionOrderOne" data-parent="#accordionOrder">
                                <div class="main-qa-card__body">
                                    <p>
                                        {{ __('loc.common_question.all_right') }}
                                        <br>
                                        {{ __('loc.common_question.follow_price') }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="main-qa-card">
                            <div class="main-qa-card__header collapsed" data-toggle="collapse" data-target="#accordionOrderTwo" aria-expanded="true" aria-controls="accordionOrderTwo">
                                <header>
                                    {{ __('loc.common_question.how_to_trace') }}
                                    <div class="main-qa-card__img">
                                        <img src="/svg/main/accordion-arrow.svg" alt="">
                                    </div>
                                </header>
                            </div>
                            <div id="accordionOrderTwo" class="collapse" aria-labelledby="accordionOrderTwo" data-parent="#accordionOrder">
                                <div class="main-qa-card__body">
                                    <p>
                                        {{ __('loc.common_question.all_right') }}
                                        <br>
                                        {{ __('loc.common_question.follow_price') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <p class="main-qa__small">
                        {{ __('loc.common_question.other') }}
                    </p>
                    <div class="accordion" id="accordionOther">
                        <div class="main-qa-card">
                            <div class="main-qa-card__header" data-toggle="collapse" data-target="#accordionOtherOne" aria-expanded="true" aria-controls="accordionOtherOne">
                                <header>
                                    {{ __('loc.common_question.if_questions') }}
                                </header>
                            </div>
                            <div id="accordionOtherOne" class="collapse show" aria-labelledby="accordionOtherOne" data-parent="#accordionOther">
                                <div class="main-qa-card__body">
                                    <p class="main-qa-card__contacts">
                                        {{ __('loc.common_question.contact_us') }}
                                        <a href="tel:+90(551) 273-79-71">
                                            +90(551) 273-79-71
                                        </a>
                                    </p>
                                    <div class="main-qa-card__social">
                                        <a href="tel:+90(551) 273-79-71">
                                            <img src="/svg/main/phone.svg" alt="">
                                        </a>
                                        <a href="tel:+90(551) 273-79-71">
                                            <img src="/svg/main/whatsapp.svg" alt="">
                                        </a>
                                        <a href="tel:+90(551) 273-79-71">
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
                <h2 class="contact__title">{{ __('loc.feedback_form.faq') }}
                </h2>
                <div class="contact__wrap">
                    <form action="#" class="contact__form">
                        <div class="contact__form-group">
                            <input class="contact__form-input" type="text" name="name" placeholder="{{ __('loc.feedback_form.name') }}">
                            <input class="contact__form-input" type="text" name="phone" placeholder="{{ __('loc.feedback_form.phone') }}">
                        </div>
                        <textarea class="contact__form-textarea" name="questions" placeholder="{{ __('loc.feedback_form.question') }}"></textarea>
                        <button class="contact__form-btn btn" type="submit">{{ __('loc.feedback_form.send') }}</button>
                        <span class="contact__form-send">{{ __('loc.feedback_form.send_data') }}</span>
                    </form>
                    <div class="contact__box">
                        <div class="contact__box-descr">{{ __('loc.feedback_form.contact_us') }}</div>
                        <a class="contact__box-phone" href="tel:+79000000000">+90(551) 273-79-71</a>
                        <div class="contact__social">
                            <a href="#" class="contact__social-item">WhatsApp</a>
                            <a href="#" class="contact__social-item">Telegram</a>
                            <a href="#" class="contact__social-item">Viber</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="contact__improve">
                <div class="contact__improve-text">{{ __('loc.what_can_be_improved_on_this_page') }}</div>
            </a>
        </div>
    </div>

</main>

<x-footer />