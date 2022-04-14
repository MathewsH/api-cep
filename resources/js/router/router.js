import Vue from "vue"
import VueRouter from 'vue-router'
import welcome from '../components/welcome.vue'
import list from '../components/list.vue'
import Cep from '../components/Cep.vue'
const route = [
    {
        path: '/',
        name: 'welcome',
        component: welcome
    },
    {
        path: '/cep',
        name: 'cep',
        component: Cep
    },
    {
        path: '/lista',
        name: 'lista',
        component: list
    }
]
const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router