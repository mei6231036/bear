<template>
	<div id="charts">
		开始日期<date-picker field="myDate"
				 placeholder="选择日期"
				 v-model="date"
				 format="yyyy-mm-dd" @click.native="aa">
	</date-picker>
	      结束日期<date-picker field="myDate"
				 placeholder="选择日期"
				 v-model="edate"
				 format="yyyy-mm-dd" @click.native="aa">

</date-picker>	

    <div id="main"  :style="{width:'2000px',height:'500px'}"></div>
</div>
</template>

<script>
import myDatepicker from 'vue-datepicker-simple/datepicker-2.vue';
	

	   export default{
        data (){
            return {
				data:[],
				 date:'',
  				 edate:'',
            }
        },
         components: {
		    'date-picker': myDatepicker
		 },
        mounted (){
        	
        	this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=city/sel',{params:{a:this.date,b:this.edate}}, {
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
                    data: response.body.city
                },
                yAxis: {},
                series: [{
                    name: '注册量',
                    type: 'bar',
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

	   	this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=city/sel',{params:{a:this.date,b:this.edate}}, {
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
                    data: response.body.city
                },
                yAxis: {},
                series: [{
                    name: '注册量',
                    type: 'bar',
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
	.vue-datepicker{display: inline-block}
    
</style>