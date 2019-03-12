//require('./bootstrap');

window.Vue = require('vue');
import axios from 'axios';
window.axios=require('axios');
//vue router
import Vue from 'vue'
import VueRouter from 'vue-router'
import {routes} from './routes'

Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history', //removes # (hashtag) from url
    base: '/',
    fallback: true, //router should fallback to hash (#) mode when the browser does not support history.pushState
    routes // short for `routes: routes`
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('phanloaimenu', require('./components/menu/PhanLoai.vue').default);
Vue.component('nhacungcapmenu', require('./components/menu/Nhacungcap.vue').default);
Vue.component('nhasanxuatmenu', require('./components/menu/Nhasanxuat.vue').default);
window.Fire = new Vue();
const app = new Vue({
    el: '#app',
    router,
    data:{
        search: ''
    },
    methods: {
        Timkiem(){
            Fire.$emit('Searching');
        }  
    },
});

