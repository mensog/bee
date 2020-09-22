<x-header/>

<main id="content" role="main" class="suppliers">
    <section class="main-screen">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Главная</a></li>
                <li class="breadcrumb__item">/</li>
                <li class="breadcrumb__item"><a class="breadcrumb__link" href="#">Поставщикам</a></li>
            </ul>
            <h1 class="main-screen__title">Продавайте товары и <br> зарабатывайте вместе с нами</h1>
            <h2 class="main-screen__subtitle">Дополнительные продажи товара, большие объемы, партнерские условия</h2>
            <div class="main-screen__benefits">
                <div class="main-screen__benefits-item">
                    <div class="main-screen__benefits-title">10 000 <span>товаров</span></div>
                    <div class="main-screen__benefits-descr">в день покупают клиенты</div>
                </div>
                <div class="main-screen__benefits-item">
                    <div class="main-screen__benefits-title">2 <span>часа</span></div>
                    <div class="main-screen__benefits-descr">в месяц потребуется <br> вашего времени</div>
                </div>
                <div class="main-screen__benefits-item">
                    <div class="main-screen__benefits-title"><span>до</span> 17%</div>
                    <div class="main-screen__benefits-descr">комиссии от продажи удерживаем с поставщика</div>
                </div>
            </div>
            <a href="{{ Route::currentRouteName() === 'suppliers' ? '#terms' : route('suppliers') . '#become' }}"
               class="main-screen__btn btn btn-primary">Начать работу</a>
        </div>
    </section>

    <section class="expectations">
        <div class="container">
            <h2 class="expectations__title">Что ожидаем от Вас?</h2>
            <div class="row">
                <div class="col-4">
                    <div class="expectations__item expectations__item_gray">
                        <div class="expectations__item-title">Собственный склад</div>
                        <div class="expectations__item-text">
                            <span>В пределах МКАД</span>
                            <span>Удобный подъезд для погрузки</span>
                            <span>Чем больше машина, тем больше <br> товаров сможете доставить</span>
                        </div>
                        <img src="/img/suppliers/stock.png" alt="cars" class="expectations__item-img">
                    </div>
                </div>
                <div class="col-4">
                    <div class="expectations__item expectations__item_dark-gray">
                        <div class="expectations__item-title expectations__item-title_white">Упаковка заказов <br> для
                            погрузки
                        </div>
                        <div class="expectations__item-text expectations__item-text_white">
                            <span>Вы упаковываете заказ, мы забираем</span>
                            <span>Время на упаковку - 24 часа</span>
                        </div>
                        <img src="/svg/suppliers/pack.svg" alt="dumbbell" class="expectations__item-img">
                    </div>
                </div>
                <div class="col-4">
                    <div class="expectations__item expectations__item_yellow">
                        <div class="expectations__item-title">Менеджер для связи</div>
                        <div class="expectations__item-text">
                            <span>Доступный с 8:00 до 20:00</span>
                            <span>Готовый решать организационные <br> вопросы, ответственный и <br> доброжелательный</span>
                        </div>
                        <img src="/svg/suppliers/phone.svg" alt="smile" class="expectations__item-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="terms" class="terms">
        <div class="container">
            <h2 class="terms__title">Условия и бонусы</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="terms__item">
                        <div class="terms__item-img">
                            <img src="/svg/suppliers/arrows-up.svg" alt="arrows-up">
                        </div>
                        <div>
                            <div class="terms__item-title">Большой оборот</div>
                            <div class="terms__item-text">
                                У вас хороший ассортимент? Мы его реализуем. <br>
                                Мы уже продаем 10 000 товаров в день
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="terms__item">
                        <div class="terms__item-img">
                            <img src="/svg/suppliers/cup.svg" alt="cup">
                        </div>
                        <div>
                            <div class="terms__item-title">Без конкурентов</div>
                            <div class="terms__item-text">
                                Ведем нишевой отбор поставщиков. Гарантируем сохранить <br>
                                ваши позиции без конкурентов
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="terms__item">
                        <div class="terms__item-img">
                            <img src="/svg/suppliers/heart.svg" alt="heart">
                        </div>
                        <div>
                            <div class="terms__item-title">Узнаваемость бренда</div>
                            <div class="terms__item-text">
                                Вашу продукцию увидят и купят тысячи клиентов
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="terms__item">
                        <div class="terms__item-img">
                            <img src="/svg/suppliers/percent.svg" alt="percent">
                        </div>
                        <div>
                            <div class="terms__item-title">Низкая комиссия</div>
                            <div class="terms__item-text">
                                Единая комиссия - всего 17% от стоимости товара
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="become" class="become">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="become__wrapper become__wrapper_bg">
                        <h2 class="become__title">Станьте поставщиком в 5 кликов</h2>
                        <p class="become__text">Заполните контактные данные и получите доступ в личный кабинет
                            поставщика</p>
                        <button class="btn btn-primary become__btn">Стать поставщиком</button>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="become__wrapper">
                        <h4 class="become__subtitle">Остались вопросы?</h4>
                        <p class="become__text become__text_gray">Оставьте контактные данные, мы перезвоним</p>
                        <form action="#">
                            <input class="become__input" type="text" placeholder="Имя">
                            <input class="become__input" type="text" placeholder="Телефон">
                            <button class="btn btn-primary become__btn">Перезвоните мне</button>
                            <div class="become__text become__text_small">Отправляя свои данные, вы соглашаетесь на
                                обработку персональных данных
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-improve/>
</main>

<x-footer/>
