
require('./bootstrap');

window.Vue = require('vue');

import Vuetify from 'vuetify';
Vue.use(Vuetify);

import User from './Helpers/User';
window.User = User;

window.EventBus = new Vue();



Vue.component('AppHome', require('./components/AppHome.vue').default);

import router from './Router/router.js';

const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    router,
});
