const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/js/app.js', 'resources/js/owl.carousel.js'], 'public/js').version()
    .sass('resources/sass/app.scss', 'public/css').version()
    .styles(['resources/css/app.css', 'resources/css/animate.css/animate.css', 'resources/css/font-awesome/fontawesome-all.min.css',
        'resources/css/vendor/hs-megamenu/src/hs.megamenu.css', 'resources/css/vendor/ion-rangeslider/css/ion.rangeSlider.css',
        'resources/css/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css', 'resources/css/vendor/fancybox/jquery.fancybox.css',
        'resources/css/vendor/slick-carousel/slick/slick.css', 'resources/css/vendor/bootstrap-select/dist/css/bootstrap-select.min.css',
        'resources/css/font-beeclub.css', 'resources/css/owl.carousel.min.css', 'resources/css/owl.theme.default.min.css'
    ], 'public/css/app.css').version();
