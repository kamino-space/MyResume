require('./bootstrap');

window.Vue = require('vue');

import ElementUI from 'element-ui';
import Auth from './components/AuthComponent.vue';
import Loading from './components/LoadingComponent.vue';

import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);

const app = new Vue({
    el: '#app',
    render: show => show(Auth)
});