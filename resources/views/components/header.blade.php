<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Beeclub</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>

<body>

<header id="header" class="u-header u-header-left-aligned-nav">
    <div class="u-header__section">
        <div class="u-header-topbar py-2 d-none d-xl-block">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div class="topbar-left">
                        <a href="{{route('home')}}" class="text-gray-110 font-size-13 u-header-topbar__nav-link">Beeclub
                            - маркетплейс строительных материалов</a>
                    </div>
                    <div class="topbar-right ml-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i>
                                    Москва</a>
                            </li>
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a href="#" class="u-header-topbar__nav-link"><i
                                        class="ec ec-transport mr-1"></i> Отследить заказ</a>
                            </li>
                            <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                <a id="sidebarNavToggler" href="javascript:;" role="button"
                                   class="u-header-topbar__nav-link"
                                   aria-controls="sidebarContent"
                                   aria-haspopup="true"
                                   aria-expanded="false"
                                   data-unfold-event="click"
                                   data-unfold-hide-on-scroll="false"
                                   data-unfold-target="#sidebarContent"
                                   data-unfold-type="css-animation"
                                   data-unfold-animation-in="fadeInRight"
                                   data-unfold-animation-out="fadeOutRight"
                                   data-unfold-duration="500">
                                    <i class="ec ec-user mr-1"></i> Зарегистрироваться <span
                                        class="text-gray-50">или</span> Войти
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="py-2 py-xl-5 bg-primary-down-lg">
            <div class="container my-0dot5 my-xl-0">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <nav
                            class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                            <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center"
                               href="{{route('home')}}" aria-label="BeeClub">
                                <svg width="127" height="34" viewBox="0 0 127 34" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M16.716 16.808C17.836 17.1627 18.7133 17.76 19.348 18.6C19.9827 19.4213 20.3 20.4387 20.3 21.652C20.3 23.3693 19.628 24.6947 18.284 25.628C16.9587 26.5427 15.0173 27 12.46 27H2.324V7.4H11.9C14.2893 7.4 16.1187 7.85733 17.388 8.772C18.676 9.68667 19.32 10.928 19.32 12.496C19.32 13.448 19.0867 14.2973 18.62 15.044C18.172 15.7907 17.5373 16.3787 16.716 16.808ZM6.832 10.816V15.436H11.34C12.46 15.436 13.3093 15.24 13.888 14.848C14.4667 14.456 14.756 13.8773 14.756 13.112C14.756 12.3467 14.4667 11.7773 13.888 11.404C13.3093 11.012 12.46 10.816 11.34 10.816H6.832ZM12.124 23.584C13.3187 23.584 14.2147 23.388 14.812 22.996C15.428 22.604 15.736 21.9973 15.736 21.176C15.736 19.552 14.532 18.74 12.124 18.74H6.832V23.584H12.124ZM38.1822 19.524C38.1822 19.58 38.1542 19.972 38.0982 20.7H26.7022C26.9075 21.6333 27.3928 22.3707 28.1582 22.912C28.9235 23.4533 29.8755 23.724 31.0142 23.724C31.7982 23.724 32.4888 23.612 33.0862 23.388C33.7022 23.1453 34.2715 22.772 34.7942 22.268L37.1182 24.788C35.6995 26.412 33.6275 27.224 30.9022 27.224C29.2035 27.224 27.7008 26.8973 26.3942 26.244C25.0875 25.572 24.0795 24.648 23.3702 23.472C22.6608 22.296 22.3062 20.9613 22.3062 19.468C22.3062 17.9933 22.6515 16.668 23.3422 15.492C24.0515 14.2973 25.0128 13.3733 26.2262 12.72C27.4582 12.048 28.8302 11.712 30.3422 11.712C31.8168 11.712 33.1515 12.0293 34.3462 12.664C35.5408 13.2987 36.4742 14.2133 37.1462 15.408C37.8368 16.584 38.1822 17.956 38.1822 19.524ZM30.3702 15.016C29.3808 15.016 28.5502 15.296 27.8782 15.856C27.2062 16.416 26.7955 17.1813 26.6462 18.152H34.0662C33.9168 17.2 33.5062 16.444 32.8342 15.884C32.1622 15.3053 31.3408 15.016 30.3702 15.016ZM55.8462 19.524C55.8462 19.58 55.8182 19.972 55.7622 20.7H44.3662C44.5716 21.6333 45.0569 22.3707 45.8222 22.912C46.5876 23.4533 47.5396 23.724 48.6782 23.724C49.4622 23.724 50.1529 23.612 50.7502 23.388C51.3662 23.1453 51.9356 22.772 52.4582 22.268L54.7822 24.788C53.3636 26.412 51.2916 27.224 48.5662 27.224C46.8676 27.224 45.3649 26.8973 44.0582 26.244C42.7516 25.572 41.7436 24.648 41.0342 23.472C40.3249 22.296 39.9702 20.9613 39.9702 19.468C39.9702 17.9933 40.3156 16.668 41.0062 15.492C41.7156 14.2973 42.6769 13.3733 43.8902 12.72C45.1222 12.048 46.4942 11.712 48.0062 11.712C49.4809 11.712 50.8156 12.0293 52.0102 12.664C53.2049 13.2987 54.1382 14.2133 54.8102 15.408C55.5009 16.584 55.8462 17.956 55.8462 19.524ZM48.0342 15.016C47.0449 15.016 46.2142 15.296 45.5422 15.856C44.8702 16.416 44.4596 17.1813 44.3102 18.152H51.7302C51.5809 17.2 51.1702 16.444 50.4982 15.884C49.8262 15.3053 49.0049 15.016 48.0342 15.016ZM66.0343 27.224C64.4289 27.224 62.9823 26.8973 61.6943 26.244C60.4249 25.572 59.4263 24.648 58.6983 23.472C57.9889 22.296 57.6343 20.9613 57.6343 19.468C57.6343 17.9747 57.9889 16.64 58.6983 15.464C59.4263 14.288 60.4249 13.3733 61.6943 12.72C62.9823 12.048 64.4289 11.712 66.0343 11.712C67.6209 11.712 69.0023 12.048 70.1783 12.72C71.3729 13.3733 72.2409 14.316 72.7823 15.548L69.3943 17.368C68.6103 15.9867 67.4809 15.296 66.0063 15.296C64.8676 15.296 63.9249 15.6693 63.1783 16.416C62.4316 17.1627 62.0583 18.18 62.0583 19.468C62.0583 20.756 62.4316 21.7733 63.1783 22.52C63.9249 23.2667 64.8676 23.64 66.0063 23.64C67.4996 23.64 68.6289 22.9493 69.3943 21.568L72.7823 23.416C72.2409 24.6107 71.3729 25.544 70.1783 26.216C69.0023 26.888 67.6209 27.224 66.0343 27.224ZM75.1879 6.224H79.5559V27H75.1879V6.224ZM98.7858 11.936V27H94.6418V25.208C94.0631 25.8613 93.3724 26.3653 92.5698 26.72C91.7671 27.056 90.8991 27.224 89.9658 27.224C87.9871 27.224 86.4191 26.6547 85.2618 25.516C84.1044 24.3773 83.5258 22.688 83.5258 20.448V11.936H87.8938V19.804C87.8938 22.2307 88.9111 23.444 90.9458 23.444C91.9911 23.444 92.8311 23.108 93.4658 22.436C94.1004 21.7453 94.4178 20.728 94.4178 19.384V11.936H98.7858ZM111.736 11.712C113.136 11.712 114.406 12.0387 115.544 12.692C116.702 13.3267 117.607 14.232 118.26 15.408C118.914 16.5653 119.24 17.9187 119.24 19.468C119.24 21.0173 118.914 22.38 118.26 23.556C117.607 24.7133 116.702 25.6187 115.544 26.272C114.406 26.9067 113.136 27.224 111.736 27.224C109.664 27.224 108.087 26.5707 107.004 25.264V27H102.832V6.224H107.2V13.532C108.302 12.3187 109.814 11.712 111.736 11.712ZM110.98 23.64C112.1 23.64 113.015 23.2667 113.724 22.52C114.452 21.7547 114.816 20.7373 114.816 19.468C114.816 18.1987 114.452 17.1907 113.724 16.444C113.015 15.6787 112.1 15.296 110.98 15.296C109.86 15.296 108.936 15.6787 108.208 16.444C107.499 17.1907 107.144 18.1987 107.144 19.468C107.144 20.7373 107.499 21.7547 108.208 22.52C108.936 23.2667 109.86 23.64 110.98 23.64Z"
                                        fill="black"/>
                                    <circle cx="124.5" cy="24.5" r="2.5" fill="#FED700"/>
                                </svg>
                            </a>
                        </nav>

                        <aside id="sidebarHeader1" class="u-sidebar u-sidebar--left"
                               aria-labelledby="sidebarHeaderInvokerMenu">
                            <div class="u-sidebar__scroller">
                                <div class="u-sidebar__container">
                                    <div class="u-header-sidebar__footer-offset pb-0">
                                        <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-7">
                                            <button type="button" class="close ml-auto"
                                                    aria-controls="sidebarHeader"
                                                    aria-haspopup="true"
                                                    aria-expanded="false"
                                                    data-unfold-event="click"
                                                    data-unfold-hide-on-scroll="false"
                                                    data-unfold-target="#sidebarHeader1"
                                                    data-unfold-type="css-animation"
                                                    data-unfold-animation-in="fadeInLeft"
                                                    data-unfold-animation-out="fadeOutLeft"
                                                    data-unfold-duration="500">
                                                <span aria-hidden="true"><i
                                                        class="ec ec-close-remove text-gray-90 font-size-20"></i></span>
                                            </button>
                                        </div>

                                        <div class="js-scrollbar u-sidebar__body">
                                            <div id="headerSidebarContent"
                                                 class="u-sidebar__content u-header-sidebar__content">
                                                <a class="d-flex ml-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-vertical"
                                                   href="/" aria-label="BeeClub">
                                                    <svg width="127" height="34" viewBox="0 0 127 34" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M16.716 16.808C17.836 17.1627 18.7133 17.76 19.348 18.6C19.9827 19.4213 20.3 20.4387 20.3 21.652C20.3 23.3693 19.628 24.6947 18.284 25.628C16.9587 26.5427 15.0173 27 12.46 27H2.324V7.4H11.9C14.2893 7.4 16.1187 7.85733 17.388 8.772C18.676 9.68667 19.32 10.928 19.32 12.496C19.32 13.448 19.0867 14.2973 18.62 15.044C18.172 15.7907 17.5373 16.3787 16.716 16.808ZM6.832 10.816V15.436H11.34C12.46 15.436 13.3093 15.24 13.888 14.848C14.4667 14.456 14.756 13.8773 14.756 13.112C14.756 12.3467 14.4667 11.7773 13.888 11.404C13.3093 11.012 12.46 10.816 11.34 10.816H6.832ZM12.124 23.584C13.3187 23.584 14.2147 23.388 14.812 22.996C15.428 22.604 15.736 21.9973 15.736 21.176C15.736 19.552 14.532 18.74 12.124 18.74H6.832V23.584H12.124ZM38.1822 19.524C38.1822 19.58 38.1542 19.972 38.0982 20.7H26.7022C26.9075 21.6333 27.3928 22.3707 28.1582 22.912C28.9235 23.4533 29.8755 23.724 31.0142 23.724C31.7982 23.724 32.4888 23.612 33.0862 23.388C33.7022 23.1453 34.2715 22.772 34.7942 22.268L37.1182 24.788C35.6995 26.412 33.6275 27.224 30.9022 27.224C29.2035 27.224 27.7008 26.8973 26.3942 26.244C25.0875 25.572 24.0795 24.648 23.3702 23.472C22.6608 22.296 22.3062 20.9613 22.3062 19.468C22.3062 17.9933 22.6515 16.668 23.3422 15.492C24.0515 14.2973 25.0128 13.3733 26.2262 12.72C27.4582 12.048 28.8302 11.712 30.3422 11.712C31.8168 11.712 33.1515 12.0293 34.3462 12.664C35.5408 13.2987 36.4742 14.2133 37.1462 15.408C37.8368 16.584 38.1822 17.956 38.1822 19.524ZM30.3702 15.016C29.3808 15.016 28.5502 15.296 27.8782 15.856C27.2062 16.416 26.7955 17.1813 26.6462 18.152H34.0662C33.9168 17.2 33.5062 16.444 32.8342 15.884C32.1622 15.3053 31.3408 15.016 30.3702 15.016ZM55.8462 19.524C55.8462 19.58 55.8182 19.972 55.7622 20.7H44.3662C44.5716 21.6333 45.0569 22.3707 45.8222 22.912C46.5876 23.4533 47.5396 23.724 48.6782 23.724C49.4622 23.724 50.1529 23.612 50.7502 23.388C51.3662 23.1453 51.9356 22.772 52.4582 22.268L54.7822 24.788C53.3636 26.412 51.2916 27.224 48.5662 27.224C46.8676 27.224 45.3649 26.8973 44.0582 26.244C42.7516 25.572 41.7436 24.648 41.0342 23.472C40.3249 22.296 39.9702 20.9613 39.9702 19.468C39.9702 17.9933 40.3156 16.668 41.0062 15.492C41.7156 14.2973 42.6769 13.3733 43.8902 12.72C45.1222 12.048 46.4942 11.712 48.0062 11.712C49.4809 11.712 50.8156 12.0293 52.0102 12.664C53.2049 13.2987 54.1382 14.2133 54.8102 15.408C55.5009 16.584 55.8462 17.956 55.8462 19.524ZM48.0342 15.016C47.0449 15.016 46.2142 15.296 45.5422 15.856C44.8702 16.416 44.4596 17.1813 44.3102 18.152H51.7302C51.5809 17.2 51.1702 16.444 50.4982 15.884C49.8262 15.3053 49.0049 15.016 48.0342 15.016ZM66.0343 27.224C64.4289 27.224 62.9823 26.8973 61.6943 26.244C60.4249 25.572 59.4263 24.648 58.6983 23.472C57.9889 22.296 57.6343 20.9613 57.6343 19.468C57.6343 17.9747 57.9889 16.64 58.6983 15.464C59.4263 14.288 60.4249 13.3733 61.6943 12.72C62.9823 12.048 64.4289 11.712 66.0343 11.712C67.6209 11.712 69.0023 12.048 70.1783 12.72C71.3729 13.3733 72.2409 14.316 72.7823 15.548L69.3943 17.368C68.6103 15.9867 67.4809 15.296 66.0063 15.296C64.8676 15.296 63.9249 15.6693 63.1783 16.416C62.4316 17.1627 62.0583 18.18 62.0583 19.468C62.0583 20.756 62.4316 21.7733 63.1783 22.52C63.9249 23.2667 64.8676 23.64 66.0063 23.64C67.4996 23.64 68.6289 22.9493 69.3943 21.568L72.7823 23.416C72.2409 24.6107 71.3729 25.544 70.1783 26.216C69.0023 26.888 67.6209 27.224 66.0343 27.224ZM75.1879 6.224H79.5559V27H75.1879V6.224ZM98.7858 11.936V27H94.6418V25.208C94.0631 25.8613 93.3724 26.3653 92.5698 26.72C91.7671 27.056 90.8991 27.224 89.9658 27.224C87.9871 27.224 86.4191 26.6547 85.2618 25.516C84.1044 24.3773 83.5258 22.688 83.5258 20.448V11.936H87.8938V19.804C87.8938 22.2307 88.9111 23.444 90.9458 23.444C91.9911 23.444 92.8311 23.108 93.4658 22.436C94.1004 21.7453 94.4178 20.728 94.4178 19.384V11.936H98.7858ZM111.736 11.712C113.136 11.712 114.406 12.0387 115.544 12.692C116.702 13.3267 117.607 14.232 118.26 15.408C118.914 16.5653 119.24 17.9187 119.24 19.468C119.24 21.0173 118.914 22.38 118.26 23.556C117.607 24.7133 116.702 25.6187 115.544 26.272C114.406 26.9067 113.136 27.224 111.736 27.224C109.664 27.224 108.087 26.5707 107.004 25.264V27H102.832V6.224H107.2V13.532C108.302 12.3187 109.814 11.712 111.736 11.712ZM110.98 23.64C112.1 23.64 113.015 23.2667 113.724 22.52C114.452 21.7547 114.816 20.7373 114.816 19.468C114.816 18.1987 114.452 17.1907 113.724 16.444C113.015 15.6787 112.1 15.296 110.98 15.296C109.86 15.296 108.936 15.6787 108.208 16.444C107.499 17.1907 107.144 18.1987 107.144 19.468C107.144 20.7373 107.499 21.7547 108.208 22.52C108.936 23.2667 109.86 23.64 110.98 23.64Z"
                                                            fill="black"/>
                                                        <circle cx="124.5" cy="24.5" r="2.5" fill="#FED700"/>
                                                    </svg>

                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="col d-none d-xl-block">
                        <form class="js-focus-state">
                            <label class="sr-only" for="searchproduct">Поиск</label>
                            <div class="input-group">
                                <input type="email"
                                       class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary"
                                       name="email" id="searchproduct-item" placeholder="Поиск по товарам"
                                       aria-label="Search for Products" aria-describedby="searchProduct1" required>
                                <div class="input-group-append">
                                    <select
                                        class="js-select selectpicker dropdown-select custom-search-categories-select"
                                        data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">
                                        <option value="one" selected>Все категории</option>
                                        <option value="two">Дополнительные категории</option>
                                        <option value="three">Дополнительные категории</option>
                                        <option value="four">Дополнительные категории</option>
                                    </select>
                                    <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill" type="button"
                                            id="searchProduct1">
                                        <span class="ec ec-search font-size-24"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                        <div class="d-inline-flex">
                            <ul class="d-flex list-unstyled mb-0 align-items-center">
                                <li class="col d-xl-none px-2 px-sm-3 position-static">
                                    <a id="searchClassicInvoker"
                                       class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary"
                                       href="javascript:;" role="button"
                                       data-toggle="tooltip"
                                       data-placement="top"
                                       title="Search"
                                       aria-controls="searchClassic"
                                       aria-haspopup="true"
                                       aria-expanded="false"
                                       data-unfold-target="#searchClassic"
                                       data-unfold-type="css-animation"
                                       data-unfold-duration="300"
                                       data-unfold-delay="300"
                                       data-unfold-hide-on-scroll="true"
                                       data-unfold-animation-in="slideInUp"
                                       data-unfold-animation-out="fadeOut">
                                        <span class="ec ec-search"></span>
                                    </a>

                                    <div id="searchClassic"
                                         class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2"
                                         aria-labelledby="searchClassicInvoker">
                                        <form class="js-focus-state input-group px-3">
                                            <input class="form-control" type="search" placeholder="Search Product">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary px-3" type="button"><i
                                                        class="font-size-18 ec ec-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                                <li class="col d-none d-xl-block"><a href="/" class="text-gray-90" data-toggle="tooltip"
                                                                     data-placement="top" title="Сравнить"><i
                                            class="font-size-22 ec ec-compare"></i></a></li>
                                <li class="col d-none d-xl-block"><a href="/" class="text-gray-90" data-toggle="tooltip"
                                                                     data-placement="top" title="Избранное"><i
                                            class="font-size-22 ec ec-favorites"></i></a></li>
                                <li class="col d-xl-none px-2 px-sm-3"><a href="/" class="text-gray-90"
                                                                          data-toggle="tooltip" data-placement="top"
                                                                          title="My Account"><i
                                            class="font-size-22 ec ec-user"></i></a></li>
                                <li class="col pr-xl-0 px-2 px-sm-3">
                                    <a href="{{route('cart')}}" class="text-gray-90 position-relative d-flex " data-toggle="tooltip"
                                       data-placement="top" title="Корзина">
                                        <i class="font-size-22 ec ec-shopping-bag"></i>
                                        <span
                                            class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-none d-xl-block bg-primary">
            <div class="container">
                <div class="min-height-45">
                    <nav
                        class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--wide u-header__navbar--no-space">
                        <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                            <ul class="navbar-nav u-header__navbar-nav">

                                <li class="nav-item hs-has-mega-menu u-header__nav-item">
                                    <a class="nav-link u-header__nav-link" href="{{route('home')}}" aria-haspopup="true"
                                       aria-expanded="false">Главная</a>
                                </li>

                                <li class="nav-item hs-has-mega-menu u-header__nav-item">
                                    <a class="nav-link u-header__nav-link" href="{{route('catalog')}}"
                                       aria-haspopup="true" aria-expanded="false">Каталог</a>
                                </li>

                                <li class="nav-item hs-has-mega-menu u-header__nav-item">
                                    <a class="nav-link u-header__nav-link" href="{{route('cart')}}" aria-haspopup="true"
                                       aria-expanded="false">Корзина</a>
                                </li>

                                <li class="nav-item hs-has-mega-menu u-header__nav-item">
                                    <a class="nav-link u-header__nav-link" href="#" aria-haspopup="true"
                                       aria-expanded="false">Админка</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

