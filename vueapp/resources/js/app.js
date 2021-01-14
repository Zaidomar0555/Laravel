require('./bootstrap');


window.Vue = require('vue').default;


Vue.component('Welcome', require('./components/Welcome.vue').default);
Vue.component('Page', require('./components/Page.vue').default);
const app = new Vue({

    el:'#app'
});