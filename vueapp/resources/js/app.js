require('./bootstrap');


window.Vue = require('vue').default;


Vue.component('Welcome', require('./components/Welcome.vue').default);
Vue.component('Page', require('./components/Page.vue').default);
Vue.component('contact-form', require('./components/ContactForm.vue').default);

const app = new Vue({

    el:'#app'
});