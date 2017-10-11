<template>
  <div id="app">

  	<naodai></naodai>
  	
  	<left></left>

    <div class="main-content">
    <router-view></router-view>
    <!--<ul v-for="a in aa">

	    <li>{{ a.img }}</li>
	    <li>{{ a.title }}</li>
	    <li>{{ a.story }}</li>
	    <li>{{ a.one }}</li>

  	</ul>-->
    </div>
		
		
  </div>
</template>

<script>
import naodai from './naodai.vue';
import left from './left.vue';

export default {
	components: {
     naodai,left
 },
 data(){return{
 	aa:[],

 }},
 	mounted: function() {

			this.$http.jsonp('http://106.14.208.246/cicici/index.php/admin/index/aaa',{}, {
	        headers: {
	 
	        },
	        emulateJSON: true
	    }).then(function(response) { 
	    	//链式调用执行
	      // 这里是处理正确的回调

	 				this.aa=response.body
	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });

	    
	},
 
}
</script>

<style>
	@import '/static/assets/css/bootstrap.min.css';
	@import 'http://fonts.googleapis.com/css?family=Open+Sans:400,300';
	@import '/static/assets/css/font-awesome.min.css';
	@import '/static/assets/css/ace.min.css';
	@import '/static/assets/css/ace-rtl.min.css';
	@import '/static/assets/css/ace-skins.min.css';
	#navbar,#sidebar
	{
		display: block;
	}

</style>
