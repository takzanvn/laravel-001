require('./bootstrap');

window.Vue = require('vue')
Vue.component('mainApp', require('./pages/App').default)

import VueRouter from 'vue-router'
import routes from './routes'
Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes
})

new Vue({
    el: '#app',
    render: h => h('mainApp'),
    router
})
