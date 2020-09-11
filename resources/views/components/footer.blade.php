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
               <span class="app-banner__badge">Скоро</span>
               <p class="app-banner__header">
                  Покупки удобнее с приложением BeeClub
               </p>
               <p class="app-banner__text">
                  Еще больше скидок и акций
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
               <img src="/svg/main/BeeClub.svg" alt="beeclub">
            </p>
            <a class="footer__link">Пользовательское соглашение</a>
         </div>
         <div class="col-lg-2 col-6">
            <p class="footer__header">Покупателям</p>
            <a class="footer__link" href="">О сервисе</a>
            <a class="footer__link" href="">Доставка</a>
         </div>
         <div class="col-lg-2 col-6">
            <p class="footer__header">Курьерам</p>
            <a class="footer__link" href="">Сколько заработаю?</a>
            <a class="footer__link" href="">Стать курьером</a>
         </div>
         <div class="col-lg-2 col-6">
            <p class="footer__header">Поставщикам</p>
            <a class="footer__link" href="">Какие условия?</a>
            <a class="footer__link" href="">Стать поставщиком</a>
         </div>
         <div class="col-lg-2 col-6">
            <p class="footer__header">Контакты</p>
            <a class="footer__link" href="">beeclub@example.com</a>
            <a class="footer__link" href="">+7 (900) 588 22 22</a>
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-lg-6 col-6">
            <p class="footer__muted">BEECLUB @ 2020</p>
         </div>
         <div class="col-lg-6 col-6">
            <p class="footer__muted text-right">Сделано с любовью в <a href="">Студии Юрина</a></p>
         </div>
      </div>
   </div>



</footer>



<nav class="mobile-bar">
   <ul class="mobile-bar__list">
      <li>
         <a href="#" class="mobile-bar__list-link">
            <img src="/svg/mobile-menu/catalog.svg" alt="">
            Каталог
         </a>
      </li>
      <li>
         <a href="#" class="mobile-bar__list-link">
            <img src="/svg/mobile-menu/search.svg" alt="">
            Поиск
         </a>
      </li>
      <li>
         <a href="{{ route('cart') }}" class="mobile-bar__list-link">
            <img src="/svg/mobile-menu/cart.svg" alt="">
            Корзина
         </a>
      </li>
      <li>
         <a href="{{ route('lk') }}" class="mobile-bar__list-link">
            <img src="/svg/mobile-menu/user.svg" alt="">
            Войти
         </a>
      </li>
      <li>
         <a href="#" class="mobile-bar__list-link" data-menu>
            <img src="/svg/mobile-menu/menu.svg" alt="">
            Меню
         </a>
      </li>
   </ul>
</nav>

<div class="mobile-content">
   <div class="mobile-content__header">
      <div class="mobile-content__header-title">Меню</div>
      <div class="mobile-content__close" data-close>
         <img src="/svg/mobile-menu/menu-close.svg" alt="">
      </div>
   </div>
   <ul class="mobile-content__list">
      <li>
         <a href="{{ route('main') }}" class="mobile-content__list-link">Главная</a>
      </li>
      <li>
         <a href="{{ route('promotions') }}" class="mobile-content__list-link">Акции</a>
      </li>
      <li>
         <a href="{{ route('about') }}" class="mobile-content__list-link">О сервисе</a>
      </li>
      <li>
         <a href="#" class="mobile-content__list-link">Доставка</a>
      </li>
      <li>
         <a href="{{ route('couriers') }}" class="mobile-content__list-link">Курьерам</a>
      </li>
      <li>
         <a href="{{ route('suppliers') }}" class="mobile-content__list-link">Поставщикам</a>
      </li>
      <li>
         <a href="#" class="mobile-content__list-link">Доп. услуги</a>
      </li>
   </ul>
   <div class="mobile-content__info">
      <a href="tel:+79005882222">+7 (900) 588 22 22</a>
      <a href="mailto:beeclub@example.com">beeclub@example.com</a>
   </div>
</div>







<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

@if($passwordChanged)
<script>
   $('#passwordChanged').modal('show')
</script>
@endif


<script>

   // Footer Accordion

   const footerTriggers = document.querySelectorAll('.footer__header');
   const footerLinks = document.querySelectorAll('.footer__link');

   footerTriggers.forEach((trigger) => {

      footerLinks.forEach((link) => {
         trigger.addEventListener('click', (e) => {
            e.preventDefault();
            trigger.classList.toggle('active');
         });
      });

   });

   // Mobile Menu

   const menuTrigger = document.querySelector('[data-menu]');
   const menuClose = document.querySelector('[data-close]');
   const menuContent = document.querySelector('.mobile-content');

   menuTrigger.addEventListener('click', (e) => {
      e.preventDefault();
      menuContent.classList.toggle('active');
      document.body.classList.toggle('lock');
   });

   menuClose.addEventListener('click', () => {
      menuContent.classList.remove('active');
      document.body.classList.remove('lock');
   });


</script>
</body>

</html>