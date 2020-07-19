
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
// require('./jquery-ui');
// require('./Chart');
// require('./bulk');

window.Vue = require('vue');


Vue.component('history-component', require('./components/History.vue'));

const app = new Vue({
    el: '#app'
});