require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';

Vue.use(VueRouter)

import router from './routes';

const app = new Vue({
    el : '#app',
    router 
});
