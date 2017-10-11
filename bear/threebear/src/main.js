import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import VueMoment from 'vue-moment';
import $ from 'jquery'
import Hello from './Hello.vue';
import naodai from './naodai.vue';
import type from './type.vue';
import gift from './gift.vue';
import mess from './mess.vue';
import anchor from './anchor.vue';
import typeadd from './typeadd.vue';
import giftadd from './giftadd.vue';
import anchoradd from './anchoradd.vue';
import login from './login.vue';
import giftrem from './giftrem.vue';
import typerem from './typerem.vue';
import messadd from './messadd.vue';
import trend from './trend.vue';
import date from './date.vue';
import city from './city.vue';
import echarts from 'echarts';
import ElementUI from 'element-ui';
import VueDatepicker from 'vue-datepicker';



Vue.use(VueRouter);
Vue.use(VueResource);
Vue.use(VueMoment);
Vue.use(ElementUI);
Vue.use(VueDatepicker);
Vue.prototype.$echarts = echarts 


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
	    path: '/mess',
	    component: mess,
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
	  {
	    path: '/giftrem/:id',
	    name:'grem',
	    component: giftrem,
	  },
	  {
	    path: '/typerem/:id',
	    name:'trem',
	    component: typerem,
	  },
	  {
	    path: '/city',
	    component: city,
	  },
	  {
	    path: '/date',
	    component: date,
	  },
	  {
	    path: '/trend',
	    component: trend,
	  }
	
	 
	]	
})
new Vue({
  el: '#app',
  router:router,
  render: h => h(App),
});
Vue.filter('moment', function (value, formatString) {
    formatString = formatString || 'YYYY-MM-DD HH:mm:ss';
    return moment(value).format(formatString);
});
router.push('/login');

