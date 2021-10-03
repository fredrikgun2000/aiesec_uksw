import Vue from 'vue'
import VueRouter from 'vue-router'
import Test from '../components/test.vue'
import Login from '../components/private/login.vue'
import Home from '../components/public/home/home.vue'
import Department from '../components/private/department/department.vue'
import Member from '../components/private/member/member.vue'
import Txp from '../components/private/txp/txp.vue'
import Dtxp from '../components/private/txp/dtxp.vue'

Vue.use(VueRouter)

const routes = [
	{
		path: '/test',
		name: 'test',
		component: Test
	},
	{
		path: '/login',
		name: 'login',
		component: Login
	},
	{
		path: '/',
		name: 'home',
		component: Home
	},
	{
		path: '/admin/department',
		name: 'department',
		component: Department
	},
	{
		path: '/admin/member',
		name: 'member',
		component: Member
	},
	{
		path: '/admin/txp',
		name: 'txp',
		component: Txp
	},
	{
		path: '/admin/dtxp',
		name: 'dtxp',
		component: Dtxp
	},
]

const router = new VueRouter({
		mode: 'history',
		routes
	})


export default router
