import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../components/public/home/home.vue'
import Txp from '../components/private/txp/txp.vue'

Vue.use(VueRouter)

const routes = [
	{
		path: '/',
		name: 'home',
		component: Home
	},
	{
		path: '/admin/txp',
		name: 'txp',
		component: Txp
	},
]

const router = new VueRouter({
		mode: 'history',
		routes
	})


export default router
