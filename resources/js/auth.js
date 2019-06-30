require('./bootstrap');

window.Vue = require('vue');

import Auth from './components/AuthComponent.vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);

new Vue({
  el: '#app',
  render: h => h(Auth)
});