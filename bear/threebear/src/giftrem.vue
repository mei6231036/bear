<template>
	<div class="col-xs-12">
		<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物名称</label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="gift" class="col-xs-10 col-sm-5" type="text" v-model="data.name">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物价值</label>

										<div class="col-sm-9">
											<input id="form-field-1" placeholder="gift" class="col-xs-10 col-sm-5" type="text" v-model="data.money">
											<input type="hidden" name="" v-model="data.id"/>
										</div>
									</div>
									
								

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button" @click="aaa(data)">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>

									
	 </form>
	</div>
	
</template>

<script>
	export default {

 data(){return{
 	data:[],

 }},
 	mounted: function() {

			this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=gift/upone',{params:{id:this.$route.params.id}},
			 {
		        emulateJSON: true
		     }).then(function(response) { 
	    	//链式调用执行
	      // 这里是处理正确的回调

	        console.log(response)
	 		this.data=response.body.arr
	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });

	    
	},
	methods: {
		aaa: function (val) {



		 this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=gift/update',
		 {params:val},
		 {
	        emulateJSON: true
	     }
		 ).then(function(response){

	        //这里是处理正确的回调

	        console.log(response.bodyText)
	      if(response.body.error==1)
	      {
			this.$router.push('/gift')
	      }

	 
	    }, function(response) {
	        // 这里是处理错误的回调
	        console.log(response)
	    });


	    
	},
   
  
  }
	
	
	 
	
 
}
</script>

<style>
	
</style>