import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import $ from 'jquery'
import Hello from './Hello.vue';
import naodai from './naodai.vue';
import type from './type.vue';
import gift from './gift.vue';
import anchor from './anchor.vue';
import typeadd from './typeadd.vue';
import giftadd from './giftadd.vue';
import anchoradd from './anchoradd.vue';
import login from './login.vue';

Vue.use(VueRouter);
Vue.use(VueResource);

var router = new VueRouter({

	// 配置路由
	routes: [
	  {
	    path: '/type',
	    component: type,
	  },
	  {
	    path: '/gift',
	    component: gift,
	  },
	  {
	    path: '/anchor',
	    component: anchor,
	  },
	  {
	    path: '/login',
	    component: login,
	  },
	  {
	    path: '/typeadd',
	    component: typeadd,
	  },
	  {
	    path: '/giftadd',
	    component: giftadd,
	  },
	  {
	    path: '/anchoradd',
	    component: anchoradd,
	  },
	
	 
	]	
})
new Vue({
  el: '#app',
  router:router,
  render: h => h(App)
})


