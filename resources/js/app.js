
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router';
import VuexFlash from 'vuex-flash';
import VueFlashMessage from 'vue-flash-message';

import Navigation from './components/Navigation.vue';
import Loader from './components/Loader.vue';

import { routes } from './routes';
import store from './vuex/store.js';

Vue.use(VueRouter);
Vue.use(VueFlashMessage);

const router = new VueRouter({
    mode: 'history',
    routes
});

Vue.component('Loader', Loader);

new Vue({
    el: '#app',
    components: { 
        Navigation 
    },
    router,
    store: store
});