require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import App from './components/App'
import VideoView from './components/VideoView'
import VideoGrid from './components/VideoGrid'

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            name: 'home',
            component: VideoGrid
        },
        {
            path: '/video/:id',
            name: 'video',
            component: VideoView
        }
    ]
})

const app = new Vue({
    el: "#app",
    components: {
        App
    },
    router
})
