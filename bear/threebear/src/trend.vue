<template>
	<div id="charts">
		选择城市<select name="" id="" v-model="city" @change="aa">
			<option :value="v.id" v-for="v in data">{{v.city}}</option>
		</select>

    <div id="main"  :style="{width:'2000px',height:'500px'}"></div>
</div>
</template>

<script>
import myDatepicker from 'vue-datepicker-simple/datepicker-2.vue';
	

	   export default{
        data (){
            return {
				data:[],
  				 city:1,
            }
        },
         components: {
		    'date-picker': myDatepicker
		 },
        mounted (){
        	
        	this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=city/show',{}, {
	        headers: {
	 
	        },
	        emulateJSON: true
	    }).then(function(response) { 
	        console.log(response)
	    	this.data=response.body.city
	    	//链式调用执行
	      // 这里是处理正确的回调
			var myChart =this.$echarts.init(document.getElementById('main'));
            myChart.setOption({
                title: { text: 'SHOW YOU' },
                tooltip: {},
                xAxis: {
                    data: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
                },
                yAxis: {},
                series: [{
                    name: '注册量',
                    type: 'line',
                    data: response.body.num
                }]
            });

	 		
	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });
        	
            
        },
        methods: {
    
	   aa:function()
	   {

	   	this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=city/show',{params:{city:this.city}}, {
	        headers: {
	 
	        },
	        emulateJSON: true
	    }).then(function(response) { 
	        console.log(response)
	    	
	    	//链式调用执行
	      // 这里是处理正确的回调
			var myChart =this.$echarts.init(document.getElementById('main'));
            myChart.setOption({
                title: { text: 'SHOW YOU' },
                tooltip: {},
                xAxis: {
                    data: ['1月','2月','3月','4月','5月','6月','7月','8月','9月','10月','11月','12月']
                },
                yAxis: {},
                series: [{
                    name: '注册量',
                    type: 'line',
                    data: response.body.num
                }]
            });

	 		
	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });
	   },
   
   }
  
  }


</script>

</script>

<style scoped>
    * {
        margin: 0;
        padding: 0;
        list-style: none;
    }
	.vue-datepicker{display: inline-block;}
	
    
</style>