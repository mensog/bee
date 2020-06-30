/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./Product/add-to-cart');
require('./Product/change-cart');
require('./Product/product-change-cart');
import is from '../../node_modules/is_js/is'

// window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app',
// });

$('.registration #email').on('keyup', function () {
    if (is.email($(this).val())) {
        $(this).removeClass('is-invalid')
        $(this).addClass('is-valid')
    } else {
        $(this).addClass('is-invalid')
    }
})

$('.registration #password').on('keyup', function () {
    if ($(this).val().length >= 8) {
        $(this).removeClass('is-invalid')
        $(this).addClass('is-valid')
    } else {
        $(this).addClass('is-invalid')
    }
})

$('.registration #password-confirm').on('keyup', function () {
    let password = $('#password').val()
    if ($(this).val() === password) {
        $(this).removeClass('is-invalid')
        $(this).addClass('is-valid')
    } else {
        $(this).addClass('is-invalid')
    }
})

export const clean = obj => {
    Object.keys(obj).forEach(key => (obj[key] == null || undefined) && delete obj[key]);
    return obj
};
