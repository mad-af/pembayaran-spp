
window.Vue = require('vue')

import vueRouter from 'vue-router'
import axios from 'axios'

import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import 'vue-material/dist/theme/default.css'

import app from './src/pages/app.vue'
import { route } from './src/route/index'

Vue.use(VueMaterial)
Vue.use(vueRouter)
Vue.use(axios)

const router = new vueRouter({ mode: 'history', routes: route});
new Vue(Vue.util.extend({ router }, app)).$mount("#app");