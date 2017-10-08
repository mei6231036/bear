import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';

import Hello from './Hello.vue';
import naodai from './naodai.vue';



Vue.use(VueRouter);
Vue.use(VueResource);

var router = new VueRouter({

	// 配置路由
	routes: [
	  {
	    path: '/',
	    component: Hello,
	  },
	 
	]	
})
new Vue({
  el: '#app',
  router:router,
  render: h => h(App)
})

