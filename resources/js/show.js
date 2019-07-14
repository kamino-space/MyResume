require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui';
import axios from 'axios';
import Index from './components/IndexComponent.vue';

import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);

Vue.prototype.$axios = axios


const app = new Vue({
    el: '#app',
    render: h => h(Index)
});