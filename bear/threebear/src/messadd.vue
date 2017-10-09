<template>
	<div class="col-xs-12">
		<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 消息内容</label>

										<div class="col-sm-9">
										<textarea  id="form-field-8" placeholder="message" v-model="val.content"cols="40" rows="5" ></textarea>
										</div>
									</div>
									
									
								

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button" @click="aaa(val)">
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
 	
 	val:{content:''},



 }},
 
	methods: {
    aaa: function (val) {



		 this.$http.jsonp('http://www.bear.com/advanced/backend/web/index.php?r=official/index',
		 {params:val},
		 {
	        emulateJSON: true
	     }
		 ).then(function(response){

	        //这里是处理正确的回调

	        console.log(response.bodyText)
	      if(response.body.error==1)
	      {
			this.$router.push('/mess')
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