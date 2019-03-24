//require('./bootstrap');

window.Vue = require('vue');
import axios from 'axios';
window.axios = require('axios');
//vue router
import Vue from 'vue'
import Vuex from 'vuex'
import VueRouter from 'vue-router'
import {routes} from './routes'
import StoreData from './store'
import accounting from 'accounting'
//add ACL(Access Control List)
import Gate from './Gate'
Vue.prototype.$gate = new Gate(window.user)

//vuex manage state global
Vue.use(Vuex)
const store = new Vuex.Store(StoreData);

//manage routes
Vue.use(VueRouter)
const router = new VueRouter({
    mode: 'history', //removes # (hashtag) from url
    base: '/',
    fallback: true, //router should fallback to hash (#) mode when the browser does not support history.pushState
    routes // short for `routes: routes`
});

//filter
Vue.filter('formatMoney', function(val){
    return accounting.formatMoney(val, "", 0, ",", ".") + ' VNĐ'
})

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('phanloaimenu', require('./components/menu/PhanLoai.vue').default);
Vue.component('nhacungcapmenu', require('./components/menu/Nhacungcap.vue').default);
Vue.component('nhasanxuatmenu', require('./components/menu/Nhasanxuat.vue').default);
Vue.component('giohangmenu', require('./components/menu/Giohangmenu.vue').default);
Vue.component('not-found', require('./components/NotFound.vue').default);

window.Fire = new Vue();
const app = new Vue({
    el: '#app',
    router,
    store,
    data:{
        search: ''
    },
    methods: {
        Timkiem(){
            Fire.$emit('Searching');
        },
    },
    mounted() {
        
    },
});

